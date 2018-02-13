@extends('client/client')

@section('content')
    <div class="centersec">
        <div class="centercon w-container">
            <h1 class="centerh1">étape 1 - VOS PHOTOS</h1>
            <p class="p">Afin de mieux évaluer votre projet, merci de télécharger 3 photos de votre maison.</p>
            <ul class="ul w-list-unstyled">
                <li class="li">Vue du sol</li>
                <li class="li">Vue de la charpente</li>
                <li class="li">Autre vue ou photo du plan</li>
            </ul>
        </div>
    </div>
    <div class="centersec">
        <div class="centercon w-container">
            <h1 class="centerh2">téléchargez vos photos</h1>
            <p class="p">Afin de mieux évaluer votre projet, merci de télécharger 3 photos de votre maison.</p>
            <div class="photorow w-row">

                <form enctype="multipart/form-data" action="" method="POST">    
                    <div class="photocol w-col w-col-4">
                        <h3 class="centerh3">Photo 1</h3>
                        <img src="{{ asset('design/images/photo-default.jpg') }}"  class="photophoto">
                        <!-- <a href="#" class="cta3 w-button">SUPPRIMER</a> -->
                        <label class="cta2 w-button" for="uploadfile_1">PRENDRE UNE PHOTO</label>
                        
                            <input type="file" id="uploadfile_1" class="upload-input" onchange="imgLoaded(this)" name="uploadfile">
                        
                    </div>


                    <div class="photocol w-col w-col-4">
                        <h3 class="centerh3">Photo 2</h3>
                        <img src="{{ asset('design/images/photo-default.jpg') }}" class="photophoto">
                        <!-- <a href="#" class="cta2 w-button">PRENDRE UNE PHOTO</a> -->
                        <label class="cta2 w-button" for="uploadfile_2">PRENDRE UNE PHOTO</label>
                        
                            <input type="file" id="uploadfile_2" class="upload-input" onchange="imgLoaded(this)" name="uploadfile">
                        
                    </div>


                    <div class="photocol w-col w-col-4">
                        <h3 class="centerh3">Photo 3</h3>
                        <img src="{{ asset('design/images/photo-default.jpg') }}" class="photophoto">
                        <!-- <a href="#" class="cta2 w-button">PRENDRE UNE PHOTO</a> -->
                        <label class="cta2 w-button" for="uploadfile_3">PRENDRE UNE PHOTO</label>
                        
                            <input type="file" id="uploadfile_3" class="upload-input"  onchange="imgLoaded(this)"name="uploadfile">
                        
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="centersec">
        <div class="centercon w-container">
            <p class="p">Parfait !<br>Passez maintenant à l&#x27;étape suivante.</p>
            <a href="{{ route('step2',['id'=>$id]) }}" class="cta1 w-button">passer à l&#x27;étape 2</a>
        </div>
    </div>


    <style>
        .upload-input {
            display:none;
        }
        .photocol img {
            width:290px;
            height:194px;
        }
    </style>



    <script>


        function imgLoaded(img){

            var input = $(img)[0];

            if (input.files && input.files[0]) {
                if (input.files[0].type.match('image.*')) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $(img).parent().find('.photophoto').attr('src', e.target.result);

                        $(img).parent().find('.w-button').removeClass('cta2').addClass('cta3').text('SUPPRIMER');
                      


                    }
                    reader.readAsDataURL(input.files[0]);
                } else {
                    console.log('ошибка, не изображение');
                }
            }


        };


    /*$('#reset-img-preview').click(function() {
        $('#img').val('');
        $('#img-preview').attr('src', 'default-preview.jpg');
    });
 
    $('#form').bind('reset', function () {
        $('#img-preview').attr('src', 'default-preview.jpg');
    });*/
</script>

    @endsection
