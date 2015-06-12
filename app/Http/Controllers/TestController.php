<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function  index($nome)
    {
        return view('test.index', ['nome' => $nome]);
    }

    public function notas()
    {

        $notas = [
            0 => 'Anotação 1',
            1 => 'Anotação 2',
            2 => 'Anotação 3',
            3 => 'Anotação 4',
            4 => 'Anotação 5',
        ];

        return view('test.notas', compact('notas'));
    }

    public function  blog()
    {

        $posts = [
            0 => array (
                'title_post'    => 'Eiiitaaa Mainhaaa!!',
                'post'          => 'Esse Lorem ipsum é só na sacanageeem!! E que abundância meu irmão viuu!! Assim você vai matar o papai. Só digo uma coisa, Domingo ela não vai! Danadaa!! Vem minha odalisca, agora faz essa cobra coral subir!!! Pau que nasce torto, Nunca se endireita. Tchannn!! Tchannn!! Tu du du pááá! Eu gostchu muitchu, heinn! danadinha! Mainhaa! Agora use meu lorem ipsum ordinária!!! Olha o quibeee! rema, rema, ordinária!.',
                'autor_post'    => 'Bruno Castro',
                'tags_post'     => ['Tag','PHP','Laravel'],
                'comments_post' => '5',
                'data_post'     => '12/06/2015'
            ),
            1 => array (
                'title_post'    => 'Silvio Santos Ipsum',
                'post'          => 'Silvio Santos Ipsum um, dois três, quatro, PIM, entendeuam? O arriscam tuduam, valendo um milhão de reaisuam. É dinheiro ou não éam? Mah ooooee vem pra cá. Vem pra cá. É dinheiro ou não éam? É por sua conta e riscoamm? Mah você não consegue né Moisés? Você não consegueam. Ma quem quer dinheiroam? Você veio da caravana de ondeammm? Ha hai. Bem boladoam, bem boladoam. Bem gozadoam. Ma você, topa ou não topamm. Ma vejam só, vejam só.',
                'autor_post'    => 'Silvio Santo',
                'tags_post'     => ['Laravel','PHP'],
                'comments_post' => '10',
                'data_post'     => '11/06/2015'
            ),
             2 => array (
                 'title_post'    => 'Chama, Chama, Chama ordinária!!!!',
                 'post'          => 'Tu du du pááá! rema, rema, ordinária! olha o quibe! eu gostchu muitchu, heinn! ordinária!! Domingo ela não vai. Tchannn!! Tchannn!! danadinha! Mainhaa! Eiiitaaa Mainhaaa!! Assim você mata o papai , viuu!! Danadaa!! Vem, vem ordinária!! Ahh mainhaa!! venha provar do meu dendê. Só na sacanageeem!! Sabe de nada inocente! que abundânciaaaa meu irmão!! Pau que nasce torto, Nunca se endireita.',
                 'autor_post'    => 'Vasconcelos',
                 'tags_post'     => ['Tag','PHP'],
                 'comments_post' => '22',
                 'data_post'     => '11/06/2015'
                  ),
             3 => array (
                 'title_post'    => 'Eu só acreditoammmm.... Vendoammmm.',
                 'post'          => 'Silvio Santos Ipsum mah você não consegue né Moisés? Você não consegueam. Valendo um milhão de reaisammm. Vem pra lá, mah você vai pra cá. Agora vai, agora vem pra láamm. Ma você está certo dissoam? É bom ou não éam? Vem pra lá, mah você vai pra cá. Agora vai, agora vem pra láamm. Valendo um milhão de reaisammm. Mah roda a roduamm. Eu só acreditoammmm.... Vendoammmm.',
                 'autor_post'    => 'Bruno Castro',
                 'tags_post'     => ['Tag'],
                 'comments_post' => '2',
                 'data_post'     => '11/06/2015'
             )
        ];

        return view('blog.index', compact('posts'));
    }
}
