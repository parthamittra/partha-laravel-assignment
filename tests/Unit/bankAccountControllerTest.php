<?php

namespace Tests\Unit;

use bankAccountClassTest;
use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;
use App\Http\Controllers\bankAccount;


class bankAccountControllerTest extends TestCase
{
        public function testBankAccount(){
            $client=new Client(['base_uri'=>'http://127.0.0.1:8000']);

            $response= $client->request('GET','/api/v1/user/bankaccount',[]);


            $this->assertEquals(200,$response->getStatusCode());

            foreach($response as $r) {
                $this->assertArrayHasKey('income', json_decode($$r, true));
            }

            foreach($response as $r) {
                $this->assertArrayHasKey('balance', json_decode($$r, true));
            }
            //problem def says there are two users only,hence the reason for the test
            $this->assertCount(2,json_decode($response->getBody(),true));

            //Negative testing,this will fail
            $this->assertCount(72,json_decode($response->getBody(),true));




        }
}
