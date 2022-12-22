<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;

class Bot extends Controller
{
    public function handle()

{
         $botman = app('botman');
  
         $botman->hears('{message}', function($botman, $message) {
  
             if ($message == 'hi') {
  
                $this->askName($botman);
  
            }
            elseif ($message == 'thank you') {
  
                $this->thankyou($botman);
  
            }
            elseif ($message == 'help') {
  
                $this->help($botman);
  
            }
            elseif ($message == 'about') {
  
                $this->about($botman);
  
            }
            elseif ($message == 'food') {
  
                $this->food($botman);
  
            }
            elseif ($message == 'location') {
  
                $this->location($botman);
  
            }
            elseif ($message == 'reviews') {
  
                $this->reviews($botman);
  
            }
            elseif ($message == 'cuisine') {
  
                $this->cuisine($botman);
  
            }
            elseif ($message == 'dishes') {
  
                $this->dishes($botman);
  
            }
            elseif ($message == 'menu') {
  
                $this->menu($botman);
  
            }
            elseif ($message == 'price') {
  
                $this->price($botman);
  
            }elseif($message == 'facts'){
                $this->random_food_fact($botman);
            }
            elseif($message == 'cart'){
                $this->cartcount($botman);
            }
            
           
            else{
  
                $botman->reply("I'm sorry, I don't understand. Please ask me about food or type 'help' for more information!");
  
            }
  
         });
       
         $botman->listen();
  
    }

  
     /**
  
     * Place your BotMan logic here.
  
     */
  public function help($botman)
  
    {
  
        $botman->reply("You can experience every type of foood possible. You can ask me about food, location, reviews, cuisine, dishes, menu, price and reservation,cart.");
      
  
    }

    function random_food_fact($botman) {
        $food_facts = array(
            "Did you know that the most expensive pizza ever sold cost over $8,000?", 
            "Avocados are actually a fruit and not a vegetable.", 
            "The world's largest ice cream sundae weighed over 8 tons.",
            "Popcorn was first invented over 5,000 years ago.", 
            "The average American consumes over 23 pounds of french fries each year.", 
            "The most expensive coffee in the world is called Kopi Luwak and it can cost up to $600 per pound.", 
            "Chocolate was once used as currency.", 
            "The most popular pizza topping in the world is pepperoni.", 
            "The world's largest hamburger weighed over 880 pounds.", 
            "The world's oldest piece of chewing gum is over 9,000 years old."
        );
        
        $botman->reply( $food_facts[array_rand($food_facts)]);
    }

    public function thankyou($botman)
  
    {
  
        $botman->reply("You are Welcome!!");
        
       
  
    }
    public function about($botman)
  
    {
  
        $botman->reply("We are the developers of the future!");
        
       
  
    }
    public function food($botman)
  
    {
  
        $botman->reply("We offer a variety of delicious cuisine, from Italian to Chinese and more!");
        
       
  
    }
    public function location($botman)
  
    {
  
        $botman->reply("We have stores located around the world!");
        
       
  
    }
    public function reviews($botman)
  
    {
  
        $botman->reply("Our customers love us! Check out our 5-star reviews");
        
       
  
    }
    public function cuisine($botman)
  
    {
  
        $botman->reply("We specialize in Italian, Chinese, Mexican and American cuisine.");
        
       
  
    }
    public function dishes($botman)
  
    {
  
        $botman->reply("We have a variety of dishes, from pizza to tacos. Check out our menu for more information.");
        
       
  
    }
    public function menu($botman)
  
    {
  
        $botman->reply("every chef provides his own menu.");
        
       
  
    }
    public function price($botman)
  
    {
  
        $botman->reply("Our prices are very reasonable! Check out our menus for more information.");
        
       
  
    }
    public function askName($botman)
  
    {
  
        $botman->ask('Hello! What is your Name?', function(Answer $answer) {
  
             $name = $answer->getText();
  
             $this->say('Nice to meet you '.$name);
  
        });
      
  
    }
    public function cartcount($botman)
  
    {
        
        if(session('id')){
            $data= (new loginController)->getcartcount();
            $botman->reply("Hello you have " .$data." item in your cart");

        }
        else{

            $botman->reply("please login or signup first");
        }
       
      
  
    }
   
    
}