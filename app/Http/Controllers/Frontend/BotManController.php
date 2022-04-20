<?php

namespace App\Http\Controllers\Frontend;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Attachments\Image;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;
use App\Models\Product;

class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');    
        $botman->hears('{message}', function ($botman, $message) {    

        $product = Product::with('media', 'category', 'tags', 'approvedReviews', 'firstMedia')->where('name',$message)->first();

            if ($message == 'Start') {
                $this->run($botman);
            } elseif ($message == 'I want a coupou'){
                $this->askCoupou($botman);    
            } elseif ($product->name) {

                $image = Image::url('http://127.0.0.1:8000/storage/images/products/'.$product->firstMedia->file_name);
                $mess = OutgoingMessage::create('Here is the information product you need. Name: ' .$product->name.' and Cost: $'.$product->price)->withAttachment($image);;
                $botman->reply($mess);
                 //'You will get: '.$product->name  
                // } elseif (!$product->name) {     
                //     $botman->reply('This item is not available in my shop');
            } else {
                $this->askName($botman);
            }

        });

       $botman->listen();
    }

    /**
     * Place your BotMan logic here.
     */
    public function askName($botman)
    {
        $botman->ask('Welcome to our shop! What is your name?', function (Answer $answer) {

            $name = $answer->getText();

            $this->say('It was nice chatting with you,' . $name . '. Just text me if you need something!');
        });
    }

    public function run($botman)
    {
        $question =  Question::create('Can you tell me exactly what you are looking for?')
            ->addButtons([
                Button::create('Info about products I am not yet using.')->value('Which product are you interested in?'),
                Button::create('Help with products I am already using.')->value('Please send mail to me about your product details and the problem you are having. Our email is: contact@gmail.com. '),
            ]);


        $botman->ask($question, function (Answer $answer) {

            $this->say('Hello! ' . $answer->getValue());
        });
    }

    public function askCoupou($botman)
    {
        $quest =  Question::create('Hey, want a coupou code that will save you money when you purchase any (Brand) product?')
            ->addButtons([
                Button::create('Yes')->value('Here is your coupou: FIFTEEN'),
                Button::create('No')->value('No worries. Remember, if you ever need me, just type "stain help" and i will come to your clothes rescue. Have a good day!'),
            ]);


        $botman->ask($quest, function (Answer $answer) {

            $this->say($answer->getValue());
        });
    }

    // public function askProduct($botman)
    // {
    //     $image = Image::url('http://127.0.0.1:8000/storage/images/products/ps51643251658-1.webp');
    //     $mess = OutgoingMessage::create('Here is the information product you need. Name: PS5. Cost: $2')->withAttachment($image);
    //     $botman->reply($mess);
    // }
}
