<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use PayPal\Exception\PPConnectionException;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\URL;
use App\Product;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Payments;

class PayPalPaymentController extends Controller
{
    private $_api_context;

    public function __construct()
    {
        $config = Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($config['client_id'], $config['secret']));
        $this->_api_context->setConfig($config['settings']);
    }

    public function payment(Product $product)
    {
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $item1 = new Item();
        $item1->setName($product->product)
            ->setCurrency('MXN')
            ->setQuantity(1)
            //->setSku("123123") // Similar to `item_number` in Classic API
            ->setPrice($product->price);

        $itemList = new ItemList();
        $itemList->setItems(array($item1));

        // $details = new Details();
        // $details->setShipping(0)
        //     ->setTax(0)
        //     ->setSubtotal($product->price);

        $amount = new Amount();
        $amount->setCurrency("MXN")
            ->setTotal($product->price);

        $transaction = new Transaction();
        
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription("Payment description")
            ->setInvoiceNumber(uniqid());

        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl(URL::to('status'))
            ->setCancelUrl(URL::to('status'));

        $payment = new Payment();
        $payment->setIntent("sale")
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions(array($transaction));

        $request = clone $payment;

        try {
            $payment->create($this->_api_context);
        } catch (PPConnectionException $ex) {
           return response('', 500);
        }

        Payments::create([
            'user_id' => Auth::id(),
            'paypal_created_at' => Carbon::parse($payment->getCreateTime())->setTimezone('America/Mexico_City'),
            'paypal_payment_id' => $payment->getId(),
            'status' => 'En espera'
        ]);

        return $payment->getApprovalLink();
    }
}
