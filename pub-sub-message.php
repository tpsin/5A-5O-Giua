<?php
class Publisher
{
    public static $queue = [];
    public static function notify()
    {
        foreach (Publisher::$queue as $key => $consumer) {
            echo "\n\nsending message to: " .$consumer->name;
            echo "\npublisher's massage: " . $consumer->print_name($key . " pub sms");
        }
    }
    public static function subscribe($consumer)
    {
        array_push(Publisher::$queue, $consumer);
    }
}

class Consumer
{
    function __construct($name) {
        $this->name = $name;
    }
    function print_name($pub_sms) {
       return $pub_sms;
    }
}

Publisher::subscribe(new Consumer("consumer_1"));
Publisher::subscribe(new Consumer("consumer_2"));


Publisher::notify();
