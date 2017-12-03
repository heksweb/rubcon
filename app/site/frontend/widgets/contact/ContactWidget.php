<?php 
namespace frontend\widgets\contact;

use yii\base\Widget;
/**
 * ContactWidget class is used to display contact information 
 */ 
class ContactWidget extends Widget
{
    public $name;
    public $description;

    public $phone;
    public $phoneTitle;

    public $address;
    public $time;
    public $email;

    public function init()
    {
        parent::init();
        if ($this->name === null) {
            $this->name = 'Наименование организации';
        }
        if ($this->description === null) {
            $this->description = 'Описание организации';
        }
        if ($this->phone === null) {
            $this->phone = '8 (000) 000-00-00';
        }
        if ($this->phoneTitle === null) {
            $this->phoneTitle = 'Описание номера телефона';
        }
        if ($this->address === null) {
            $this->address = 'Укажите адресс организации';
        }
        if ($this->time === null) {
            $this->time = 'Укажите режим работы оганизации';
        }
        if ($this->email === null) {
            $this->email = 'Укажите почту организации';
        }
    }

    public function run()
    {
        return $this->render('index',[
            'name'        => $this->name,
            'description' => $this->description,
            'phone'       => $this->phone,
            'phoneTitle'  => $this->phoneTitle,
            'address'     => $this->address,
            'time'        => $this->time,
            'email'       => $this->email,
        ]);
    }
}