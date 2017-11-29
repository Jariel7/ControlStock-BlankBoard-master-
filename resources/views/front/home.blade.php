@extends('layouts.admin')

@section('content')
<section class="content container-fluid">

  <div class="col-sm-offset-2 col-sm-8">

    <div class="row">

      <div class="col-sm-12">
        @include('includes.alerts')
      </div>

       <section id="home" name="home">
                <div id="headerwrap">
                  <div class="container">
                     <div class="row centered">
                        <div align="centered" class="col-lg-12">
                           <h1>Bienvenido a <b><a>Control Stock</a></b></h1><h3></h3>
                        
                        </div>
                    
                       <div align="center"><img src="{{ asset('/img/storage.png') }}"></div>
                    
                       </div>
                     </div> <!--/ .container -->
                   </div><!--/ #headerwrap -->
          </section>

          </div><!-- /. box body -->

        </div><!-- /. box -->

      </div><!-- /. col -->
    </div><!-- /. row -->

  </div><!-- /. col -->

</section>
@endsection
