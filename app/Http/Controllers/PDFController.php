<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JonnyW\PhantomJs\Client;
use PDF;
use app\pdf\pdflayer;

class PDFController extends Controller
{
    public function indexP($id){
        $auth = $this->getValues();
        // dd($auth);
        $view = view("users.templates.tmpl{$id}.index", compact('auth'))->render();
        $pdf = new pdflayer();
        $pdf->set_param('document_html', $view);
        $pdf->set_param('page_size', 'Letter');
        $pdf->set_param('zoom', 0);
        $pdf->convert();
        $pdf->display_pdf();
        $pdf->download_pdf(authMember()->firstname.time().".pdf");
    }

    public function preview($id){
        $auth = $this->getValues();
        return $auth ? view("users.templates.tmpl{$id}.index", compact('auth')) : 
                        redirect()->back();
    }

    protected function getValues(){
        $address = \App\Address::where([
            'member_id'     => authMember()->id,
            'is_deleted'    => 0
        ])->get();
        if(count($address) > 0):
            $param['address'] = $address[0]->city . ", " . $address[0]->country;
        endif;
        $description = \App\Description::where([
            'member_id'     => authMember()->id,
            'is_deleted'    => 0
        ])->get();
        if(count($description) > 0):
            $param['description'] = $description[0]->description;
        endif;
        $contact = \App\Contact::where([
            'member_id'     => authMember()->id,
            'is_deleted'    => 0
        ])->get();
        if(count($contact) > 0):
            $param['contact'] = $contact[0]->contact;
        endif;

        $skills = \App\Skills::where([
            'member_id'     => authMember()->id,
            'is_deleted'    => 0
        ])->get();
        if (count($skills) > 0):
            foreach($skills as $skill):
                $param['skills'][] = json_decode($skill, true);
            endforeach;
        endif;
        $interests = \App\Interest::where([
            'member_id'     => authMember()->id,
            'is_deleted'    => 0
        ])->get();
        if (count($interests) > 0):
            foreach($interests as $int):
                $param['interests'][] = json_decode($int, true);
            endforeach;
        endif;
        $experiences = \App\Experience::where([
            'member_id'     => authMember()->id,
            'is_deleted'    => 0
        ])->get();
        if (count($experiences) > 0):
            foreach($experiences as $exp):
                $param['experiences'][] = json_decode($exp, true);
            endforeach;
        endif;
        $qualifications = \App\Qualification::where([
            'member_id'     => authMember()->id,
            'is_deleted'    => 0
        ])->get();
        if (count($qualifications) > 0):
            foreach($qualifications as $qual):
                $param['qualifications'][] = json_decode($qual, true);
            endforeach;
        endif;
        return isset($param) ? $param : [];
    }
}
