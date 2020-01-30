<?php


class Dog
{
    private $data;
    public function __construct()
    {
        $curl = curl_init('https://random.dog/woof.json');
        curl_setopt_array($curl,[
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_RETURNTRANSFER => true
        ]);
        $data = curl_exec($curl);
        if ($data == true){
            $this->data = json_decode($data,true);

        }
        curl_close($curl);
    }
    public function image(){
        return $this->data['url'];
    }
}