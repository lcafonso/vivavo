@extends('layouts.app')


<!-- Style Section -->
@section('customStyle')

<style>
:root {
  --bg-color-gallery: #f0f0f0;
  --bg-color-harvest-gold: #e2c37c;
  --bg-color-tussock: #bb9246;
  --bg-color-cloudy: #aba6a3;
  --bg-color-gunsmoke: #7e8a84;
  --bg-color-stack: #949982;
  --bg-color-chestnut: #be5649;
  --bg-color-lime-spruce: #3a4953;
  --bg-color-mineshaft: #353535;
}

.rcorners-bar {
    border-top-right-radius: 25px;
    border-bottom-right-radius: 25px;
    background: #e2c37c;

    transform: translate(-10%, 18px);

}

.small-icons{
    width: 25px;
    height: auto;
}

.small-text{
   font-size:small;
   line-height: 1
}

.logo-instituicao {
  display: block;
  filter: invert(100%);
  margin-left: auto;
  margin-right: auto;
}

</style>

@endsection


<!-- Content Section -->
@section('content')

<div class="container">
  <!-- entidade de acolhimento -->
  <div class="row" style="width: 100%; height: auto; margin-bottom: 1em;">

      <div class="col-sm-2" style="background-color: var(--bg-color-gallery); height: 40px;">
          <div class="rcorners-bar pt-2" style="background-color: var(--bg-color-stack);"> </div>
      </div>

      <div class="col-sm-3" style="background-color: var(--bg-color-gallery); width: 100%; height: 40px;">
        <p style="color: var(--bg-color-stack); line-height: 2; ">Entidade de acolhimento</p>
      </div>

      <div class="col-sm-3" >
        <img src="img/IPB-Branco.png" alt="" class="logo-instituicao" style="width: 100%;">
      </div>

      <div class="col-sm-4" >
        <div class="row">
          <div class="col-sm-2">
            <img src="img/TelefonePreto.png" alt="" class="small-icons">
          </div>
          <div class="col">
            <p class="small-text">278201340 / 300029900</p>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-sm-2">
            <img src="img/EmailPretoPNG.png" alt="" class="small-icons">
          </div>
          <div class="col">
            <p class="small-text">e-mail geral: email@ipb.pt</p>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-sm-2">
            <img src="img/LocalizacaoPretoPNG.png" alt="" class="small-icons" >
          </div>
          <div class="col" >
            <p class="small-text">Campus do Cruzeiro</p>
            <p class="small-text">Avenida 25 de Abril, Cruzeiro, Lote 2.</p>
            <p class="small-text">Apartado 128. 5370-202 Mirandela</p>
          </div>
        </div>
      </div>
  </div>
  <br>
  <!-- entidade copromotora -->
  <div class="row" style="width: 100%; height: auto;">

      <div class="col-sm-2" style="background-color: var(--bg-color-cloudy); height: 40px;">
          <div class="rcorners-bar pt-2" style="background-color: var(--bg-color-gunsmoke);"> </div>
      </div>

      <div class="col-sm-3" style="background-color: var(--bg-color-cloudy); width: 100%; height: 40px;">
        <p style="color: var(--bg-color-gunsmoke); line-height: 1; ">Entidades participantes copromotivas</p>
      </div>

      <div class="col-sm-3">
        <img src="img/logo-PE2.png" alt="" class="logo-instituicao" style="width: 60%;">
      </div>

      <div class="col-sm-4" >
        <div class="row">
          <div class="col-sm-2">
            <img src="img/TelefonePreto.png" alt="" class="small-icons">
          </div>
          <div class="col" >
            <p class="small-text">258809610 / 965919650</p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-2" >
            <img src="img/EmailPretoPNG.png" alt="" class="small-icons">
          </div>
          <div class="col" >
            <p class="small-text">E-mail Geral: geral@ipvc.pt</p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-2" >
            <img src="img/LocalizacaoPretoPNG.png" alt="" class="small-icons" >
          </div>
          <div class="col" >
            <p class="small-text">Rua Escola Industrial e</p>
            <p class="small-text">Comercial de Nun’Álvares, n.º 34</p>
            <p class="small-text">4900-347 Viana do Castelo</p>
          </div>
        </div>
      </div>
  </div>
  <br><br>
  <!-- entidade copromotora -->
  <div class="row" style="width: 100%; height: auto;">

      <div class="col-sm-2" > </div>
      <div class="col-sm-3" > </div>

      <div class="col-sm-3" >
        <img src="img/hotel_logo_footer.png" alt="" class="logo-instituicao" style="width: 80%;">
      </div>

      <div class="col-sm-4">
        <div class="row">
          <div class="col-sm-2" >
            <img src="img/TelefonePreto.png" alt=""  class="small-icons" >
          </div>
          <div class="col" >
            <p class="small-text">+351273302510</p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-2" >
            <img src="img/EmailPretoPNG.png" alt=""  class="small-icons" >
          </div>
          <div class="col" >
            <p class="small-text">E-mail Geral: geral@amontesinho.pt</p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-2" >
            <img src="img/LocalizacaoPretoPNG.png" alt=""  class="small-icons"  >
          </div>
          <div class="col" >
            <p class="small-text">Rua Coronel Álvaro Cepeda, n.º1</p>
            <p class="small-text">5300-553 Gimonde Bragança</p>
            <p class="small-text">Portugal</p>
            <p class="small-text"> </p>
            <p class="small-text">http://www.amontesinho.pt/</p>
          </div>
        </div>
      </div>
  </div>

  <br><br>
  <!-- Investigador responssavel -->
  <div class="row" style="width: 100%; height: auto;">

      <div class="col-sm-2" style="background-color: var(--bg-color-harvest-gold); height: 40px;">
          <div class="rcorners-bar pt-2" style="background-color: var(--bg-color-tussock);"> </div>
      </div>
      <div class="col-sm-3" style="background-color: var(--bg-color-harvest-gold); width: 100%; height: 40px;">
        <p style="color: var(--bg-color-tussock); line-height: 2; ">Investigador(a) principal</p>
      </div>
      <div class="col-sm-7" >
        <div class="row">
          <div class="col-sm-5" >
            <p>Paula Odete Fernades</p>
          </div>
          <div class="col-sm-1" >
            <img src="img/EmailPretoPNG.png" alt="" class="small-icons" >
          </div>
          <div class="col" >
            <p  class="small-text">pof@ipb.pt</p>
          </div>
        </div>

      </div>
  </div>


  <br><br>
 <!-- Investigadores -->
    <div class="row" style="width: 100%; height: auto;">

      <div class="col-sm-2" style="background-color: var(--bg-color-harvest-gold); height: 40px;">
          <div class="rcorners-bar pt-2" style="background-color: var(--bg-color-tussock);"> </div>
      </div>
      <div class="col-sm-3" style="background-color: var(--bg-color-harvest-gold); width: 100%; height: 40px;">
        <p style="color: var(--bg-color-tussock); line-height: 2; ">Investigadores</p>
      </div>
      <div class="col-sm-7" >
        <div class="row">
          <div class="col-sm-5" >
            <p>Luís Pires</p>
          </div>
          <div class="col-sm-1" >
            <img src="img/EmailPretoPNG.png" alt="" class="small-icons" >
          </div>
          <div class="col" >
            <p  class="small-text">luica@ipb.pt</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-5" >
            <p>Aida Carvalho</p>
          </div>
          <div class="col-sm-1" >
            <img src="img/EmailPretoPNG.png" alt="" class="small-icons" >
          </div>
          <div class="col" >
            <p  class="small-text">acarvalho@ipb.pt</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-5" >
            <p>Alexandra Correia</p>
          </div>
          <div class="col-sm-1" >
            <img src="img/EmailPretoPNG.png" alt="" class="small-icons" >
          </div>
          <div class="col" >
            <p  class="small-text">acorreia@ipb.pt</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-5" >
            <p>Alexandre Parafita</p>
          </div>
          <div class="col-sm-1" >
            <img src="img/EmailPretoPNG.png" alt="" class="small-icons" >
          </div>
          <div class="col" >
            <p  class="small-text">parafita@ipb.pt</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-5" >
            <p>Carlos Casimiro Costa</p>
          </div>
          <div class="col-sm-1" >
            <img src="img/EmailPretoPNG.png" alt="" class="small-icons" >
          </div>
          <div class="col" >
            <p  class="small-text">carlos.costa@ipb.pt</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-5" >
            <p>Carlos Cunha</p>
          </div>
          <div class="col-sm-1" >
            <img src="img/EmailPretoPNG.png" alt="" class="small-icons" >
          </div>
          <div class="col" >
            <p  class="small-text">crc@ipb.pt</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-5" >
            <p>Elsa Ramalhosa</p>
          </div>
          <div class="col-sm-1" >
            <img src="img/EmailPretoPNG.png" alt="" class="small-icons" >
          </div>
          <div class="col" >
            <p  class="small-text">elsa@ipb.pt</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-5" >
            <p>Ricardo Correia</p>
          </div>
          <div class="col-sm-1" >
            <img src="img/EmailPretoPNG.png" alt="" class="small-icons" >
          </div>
          <div class="col" >
            <p  class="small-text">ricardocorreia@ipb.pt</p>
          </div>
        </div>

      </div>
    </div>

    <br><br>
    <!-- Bolseiros -->
    <div class="row" style="width: 100%; height: auto;">

      <div class="col-sm-2" style="background-color: var(--bg-color-gallery); height: 40px;">
          <div class="rcorners-bar pt-2" style="background-color: var(--bg-color-stack);"> </div>
      </div>
      <div class="col-sm-3" style="background-color: var(--bg-color-gallery); width: 100%; height: 40px;">
        <p style="color: var(--bg-color-stack); line-height: 2; ">Bolseiros</p>
      </div>
      <div class="col-sm-7" >
        <div class="row">
          <div class="col-sm-5" >
            <p>Alexandra Moura</p>
          </div>
          <div class="col-sm-1" >
            <img src="img/EmailPretoPNG.png" alt="" class="small-icons" >
          </div>
          <div class="col" >
            <p  class="small-text">alexandra.moura@ipb.pt</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-5" >
            <p>Carla Fontes</p>
          </div>
          <div class="col-sm-1" >
            <img src="img/EmailPretoPNG.png" alt="" class="small-icons" >
          </div>
          <div class="col" >
            <p  class="small-text">carlafontes@ipb.pt</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-5" >
            <p>Daniel Silva</p>
          </div>
          <div class="col-sm-1" >
            <img src="img/EmailPretoPNG.png" alt="" class="small-icons" >
          </div>
          <div class="col" >
            <p  class="small-text">danimagsilva@ipb.pt</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-5" >
            <p>Imran Khan</p>
          </div>
          <div class="col-sm-1" >
            <img src="img/EmailPretoPNG.png" alt="" class="small-icons" >
          </div>
          <div class="col" >
            <p  class="small-text">imrankhan@ipb.pt</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-5" >
            <p>Luís Afonso</p>
          </div>
          <div class="col-sm-1" >
            <img src="img/EmailPretoPNG.png" alt="" class="small-icons" >
          </div>
          <div class="col" >
            <p  class="small-text">lafonso@ipb.pt</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-5" >
            <p>Patrícia Reina</p>
          </div>
          <div class="col-sm-1" >
            <img src="img/EmailPretoPNG.png" alt="" class="small-icons" >
          </div>
          <div class="col" >
            <p  class="small-text">patriciareina@ipb.pt</p>
          </div>
        </div>
      </div>
  </div>
  <br><br>


</div>


@endsection


<!-- Java Section -->
@section('javascript')



@endsection
