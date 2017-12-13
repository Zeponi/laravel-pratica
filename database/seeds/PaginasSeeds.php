<?php

use Illuminate\Database\Seeder;
use App\Pagina;

class PaginasSeeds extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $existe = Pagina::where('tipo', '=', 'sobre')->count();

        if ($existe) {
            $paginaSobre = Pagina::where('tipo', '=', 'sobre')->first();
        } else {
            $paginaSobre = new Pagina();
        }

        $paginaSobre->titulo = "Título da Empresa";
        $paginaSobre->descricao = "Descrição breve sobre a empresa.";
        $paginaSobre->texto = "Texto sobre a empresa.";
        $paginaSobre->imagem = "img/modelo_img_home.jpg";
        $paginaSobre->mapa = '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14646.465290779337!2d-51.92702879409179!3d-23.402093393009274!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ecd13057cdf6cb%3A0xed65a938e9073b24!2sR.+Florian%C3%B3polis%2C+103+-+Parque+Res.+Cidade+Nova%2C+Maring%C3%A1+-+PR%2C+87023-010!5e0!3m2!1spt-BR!2sbr!4v1512938770159" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>';
        $paginaSobre->tipo = "sobre";
        $paginaSobre->save();

        $existe = Pagina::where('tipo', '=', 'contato')->count();

        if ($existe) {
            $paginaContato = Pagina::where('tipo', '=', 'contato')->first();
        } else {
            $paginaContato = new Pagina();
        }

        $paginaContato->titulo = "Entre em contato";
        $paginaContato->descricao = "Preencha o formulário.";
        $paginaContato->texto = "Contato";
        $paginaContato->imagem = "img/modelo_img_home.jpg";
        $paginaContato->email = "augustozeponi@hotmail.com";
        $paginaContato->tipo = "contato";
        $paginaContato->save();
        echo "Pagina Contato criada com sucesso!";
    }

}
