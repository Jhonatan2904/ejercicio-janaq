<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{  csrf_token() }}">
    <title>JANAQ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">



    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>
    <div class="container">
        <div class="d-flex align-items-center justify-content-center" style="min-height: 100vh">
            <div class="card col-md-12 col-sm-12 col-lg-6 my-3">
                <div class="card-header">
                    <h1 class="m-0">Registro de Usuario</h1>
                </div>
                <div class="card-body">
                    {{--  {{ $errors->all() }}  --}}
                    <form autocomplete="off" method="POST" id="formulario">
                        @csrf
                        <div class="form-row col-md-12 col-lg-12">
                            <div class="form-group col-md-12 col-lg-12">
                                <label>Nombres:</label>
                                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nombres completos"  value="{{ old('fullname') }}">
                                {{--  {!! $errors->first('fullname', '<small class="badge badge-danger text-wrap"><i class="fas fa-exclamation"></i> :message</small><br>') !!}  --}}
                                <div id="error_nombre" >

                                </div>

                                <div id="msg">
                                    <p style="display: none; color: red; font-size: 13px" class="m-0" id="mensaje">El nombre completo debe ser de 3 a 100 dígitos y sólo debe ser letras.</p>
                                </div>
                            </div>
                        </div>
                        <div class="form-row col-md-12 col-lg-12">
                            <div class="form-group col-md-12 col-lg-12">
                                <label>Apellidos:</label>
                                <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos completos"  value="{{ old('apellidos') }}">
                                {{--  {!! $errors->first('apellidos', '<small class="badge badge-danger text-wrap"><i class="fas fa-exclamation"></i> :message</small><br>') !!}  --}}
                                <div id="error_apellidos">

                                </div>

                                <div id="msg">
                                    <p style="display: none; color: red; font-size: 13px" class="m-0" id="mensaje_ap">Los apellidos deben ser de 3 a 100 dígitos y sólo deben ser letras.</p>
                                </div>

                            </div>
                        </div>
                        <div class="form-row col-md-12 col-lg-12">
                            <div class="form-group col-md-12 col-lg-12">
                                <label>Tipo de documento:</label>
                                <select name="tipo_documento" id="tipo_documento" class="form-control">
                                    <option value="0">Seleccione...</option>
                                    <option value="1" {{ old('tipo_documento') == 1 ? 'selected' : 0 }}>DNI</option>
                                    <option value="2" {{ old('tipo_documento') == 2 ? 'selected' : 0  }}>Carnet de extranjería</option>
                                </select>
                                {{--  {!! $errors->first('tipo_documento', '<small class="badge badge-danger text-wrap"><i class="fas fa-exclamation"></i> :message</small><br>') !!}  --}}
                                <div id="error_tipo">

                                </div>
                            </div>
                        </div>
                        <div class="form-row col-md-12 col-lg-12">
                            <div class="form-group col-md-12 col-lg-12">
                                <label>Número de Documento:</label>
                                <input type="text" class="form-control" id="number_doc" name="number_doc" placeholder="Número de Documento"  value="{{ old('number_doc') }}">
                                {{--  {!! $errors->first('number_doc', '<small class="badge badge-danger text-wrap"><i class="fas fa-exclamation"></i> :message</small><br>') !!}  --}}
                                <div id="error_number_doc">
                                </div>

                                <div id="msg">
                                    <p style="display: none; color: red; font-size: 13px" class="m-0" id="mensaje_numero">Sólo se aceptan números.</p>
                                </div>

                            </div>
                        </div>
                        <div class="form-row col-md-12 col-lg-12">
                            <div class="form-group col-md-12 col-lg-12">
                                <label>Email:</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Correo electrónico"  value="{{ old('email') }}">
                                {{--  {!! $errors->first('email', '<small class="badge badge-danger text-wrap"><i class="fas fa-exclamation"></i> :message</small><br>') !!}  --}}
                                <div id="error_email">

                                </div>
                            </div>
                        </div>
                        <div class="form-row col-md-12 col-lg-12">
                            <div class="form-group col-md-12 col-lg-12">
                                <label>Fecha de nacimiento:</label>
                                <input type="text" class="form-control date" id="fecha_nac" name="fecha_nac" placeholder="Fecha de nacimiento">
                                {{--  {!! $errors->first('fecha_nac', '<small class="badge badge-danger text-wrap"><i class="fas fa-exclamation"></i> :message</small><br>') !!}  --}}
                            </div>
                        </div>
                        <div class="form-row col-md-12 col-lg-12">
                            <div class="form-group col-md-12 col-lg-12">
                                <label>Dirección:</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección"  value="{{ old('direccion') }}">
                                {{--  {!! $errors->first('direccion', '<small class="badge badge-danger text-wrap"><i class="fas fa-exclamation"></i> :message</small><br>') !!}  --}}
                                <div id="error_direccion">
                                </div>
                                <div id="msg">
                                    <p style="display: none; color: red; font-size: 13px" class="m-0" id="mensaje_dir">La dirección debe tener máximo 150 caracteres.</p>
                                </div>
                            </div>
                        </div>

                        {{--  <div class="form-row col-md-12 col-lg-12">
                            <div class="form-group col-md-12 col-lg-4">
                                <span>Departamento:</span>
                                <select name="region" id="region" class="form-control">
                                    <option value="">Seleccione...</option>
                                    <option value="Trujillo">Trujillo</option>
                                    <option value="Lima">Lima</option>
                                </select>
                            </div>

                            <div class="form-group col-md-12 col-lg-4">
                                <span>Provincia:</span>
                                <select name="provincia" id="provincia" class="form-control" disabled>
                                </select>
                            </div>

                            <div class="form-group col-md-12 col-lg-4">
                                <span>Distrito:</span>
                                <select name="distrito" id="distrito" class="form-control" disabled>
                                </select>
                            </div>

                        </div>  --}}

                        <div class="text-center">
                            <input type="submit" id="submit" value="Registrar" class="btn btn-primary btn-block">
                        </div>

                    </form>
                    <button class="btn btn-block btn-outline-primary my-2" id="btn-limpiar">Limpiar campos</button>
                </div>
            </div>
        </div>
    </div>

<script>

    //array con provincias

    /*var Trujillo = [
    {display: "Trujillo", value: "Trujillo" },
    {display: "Pataz", value: "Pataz" },
    ]

    var Lima = [
    {display: "Lima", value: "Lima" },
    {display: "Barranca", value: "Barranca" },
    ]

    var Trujillo2 = [
    {display: "Trujillo", value: "Trujillo" },
    {display: "La Esperanza", value: "La Esperanza" },
    {display: "Victor Larco", value: "Victor Larco" },
    ]

    var Lima2 = [
    {display: "Miraflores", value: "Miraflores" },
    {display: "San Isidro", value: "San Isidro" },
    {display: "Surquillo", value: "Surquillo" },
    ]

    var Pataz = [
    {display: "Pataz", value: "Pataz" },
    {display: "Parcoy", value: "Parcoy" },
    {display: "Pias", value: "Pias" },
    ]

    var Barranca = [
        {display: "Barranca", value: "Barranca" },
        {display: "Paramonga", value: "Paramonga" },
        {display: "Pativilca", value: "Pativilca" },
        ]



    $("#region").change(function() {
        var parent = $(this).val()
        switch(parent){
            case 'Trujillo':
                 list(Trujillo)
                break
            case 'Lima':
                 list(Lima)
                break
            default:
                $("#perfil").html('')
                break
               }
    });

    document.getElementById('provincia').addEventListener('click', function(e){
        var parent = $(this).val()
        console.log(parent)
        switch(parent){
            case "Trujillo":
                list2(Trujillo2)
            break
            case "Lima":
                list2(Lima2)
            break
            case "Pataz":
                list2(Pataz)
            break
            case "Barranca":
                list2(Barranca)
            break
        }

    })

    function list(array_list){
        $("#provincia").html("")
        $(array_list).each(function (i) {
            $("#provincia").append("<option value=\""+array_list[i].value+"\">"+array_list[i].display+"</option>")
        })
    }

    function list2(array_list){
        $("#distrito").html("")
        $(array_list).each(function (i) {
            $("#distrito").append("<option value=\""+array_list[i].value+"\">"+array_list[i].display+"</option>")
        })
    }

    $('#region').click(function(){
        $('#provincia').removeAttr("disabled")
        $('#distrito').val("")
    })
    $('#provincia').click(function(){
        $('#distrito').removeAttr("disabled")
    })*/
    //datepicker
    var date = $('.date').datepicker({
        firstDay: 1
    })


    const formulario = document.getElementById('formulario')
    const inputs = document.querySelectorAll('#formulario input')

    const expresiones = {
        nombre: /^[a-zA-ZÀ-ÿ\s]{3,100}$/,
        numero: /^[+]?([0-9][0-9]+)$/,

    }

    const validarFormulario = (e) => {


        switch(e.target.name){
            case "fullname":
                if(document.getElementById('error_nombre') != null){
                    document.getElementById('error_nombre').style.display = 'none'
                }
                if(expresiones.nombre.test(e.target.value)){
                    document.getElementById('fullname').style.borderColor = "green"
                    if(document.getElementById('mensaje') != null){
                        document.getElementById('mensaje').style.display = 'none'
                    }
                } else{
                    document.getElementById('fullname').style.borderColor = "red"
                    if(document.getElementById('mensaje') != null){
                        document.getElementById('mensaje').style.display = 'block'
                    }

                }
           break

           case "apellidos":
                if(document.getElementById('error_apellidos') != null){
                    document.getElementById('error_apellidos').style.display = 'none'
                }
                if(expresiones.nombre.test(e.target.value)){
                    document.getElementById('apellidos').style.borderColor = "green"
                    if(document.getElementById('mensaje_ap') != null){
                        document.getElementById('mensaje_ap').style.display = 'none'
                    }
                } else{
                    document.getElementById('apellidos').style.borderColor = "red"
                    if(document.getElementById('mensaje_ap') != null){
                        document.getElementById('mensaje_ap').style.display = 'block'
                    }
                }
           break

           case "number_doc":
                if(document.getElementById('error_number_doc') != null){
                    document.getElementById('error_number_doc').style.display = 'none'
                }
                if(expresiones.numero.test(e.target.value)){
                    document.getElementById('number_doc').style.borderColor = "green"
                    if(document.getElementById('mensaje_numero') != null){
                        document.getElementById('mensaje_numero').style.display = 'none'
                    }
                } else{
                    document.getElementById('number_doc').style.borderColor = "red"
                    if(document.getElementById('mensaje_numero') != null){
                        document.getElementById('mensaje_numero').style.display = 'block'
                    }
                }
           break

            case "direccion":
            if(document.getElementById('error_direccion') != null){
                document.getElementById('error_direccion').style.display = 'none'
            }
            break


       }
    }
    inputs.forEach((input) => {
        input.addEventListener('keyup', validarFormulario)
        input.addEventListener('blur', validarFormulario)
    })

    $('#tipo_documento').on('blur', function(e){
        e.preventDefault
        if(document.getElementById('error_tipo').value != 0){
            document.getElementById('error_tipo').style.display = 'none'
        }
    })




    $('#submit').click(function(e){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault()

        //validar lista despegable

        const nombre = document.getElementById('fullname').value
        const apellidos = document.getElementById('apellidos').value
        const tipo_documento = document.getElementById('tipo_documento').value
        const numero = document.getElementById('number_doc').value
        const email = document.getElementById('email').value
        const fecha = document.getElementById('fecha_nac').value
        const direccion = document.getElementById('direccion').value

        if(direccion == ""){
            document.getElementById('error_direccion').style.display = 'block'
        }
        if(tipo_documento == 0){
            document.getElementById('error_tipo').style.display = 'block'
        }

        let nueva_fecha = moment(fecha).format('YYYY-MM-DD')
//        console.log(moment().format('YYYY-MM-DD'))

        $.ajax({
            type: "POST",
            dataType: "json",
            url: "{{ route('registro') }}",
            data: {nombre, apellidos, tipo_documento, numero, email, nueva_fecha, direccion},
            success:function(response){
                $('#error_nombre').html("")
                $('#error_apellidos').html("")
                $('#error_tipo').html("")
                $('#error_number_doc').html("")
                $('#error_email').html("")
                $('#error_direccion').html("")

                if(response.mensaje == "Registrado correctamente."){
                    Swal.fire({
                        icon: 'success',
                        title: 'Registrado correctamente!',
                      })
                }
            },
          error:function(error){
                    if(error.status === 422){

                        errores = error.responseJSON.errors
                        if(nombre == "" || nombre == null){
                                $('#error_nombre').html(`<span class="badge badge-danger" id="msg_nombre"><i class="fas fa-exclamation-triangle"></i> ${errores.nombre}</span>`)
                        } else {
                            $('#error_nombre').html("")
                        }

                        if(apellidos == "" || apellidos == null){
                            $('#error_apellidos').html(`<span class="badge badge-danger"><i class="fas fa-exclamation-triangle"></i> ${errores.apellidos}</span>`)
                        } else {
                            $('#error_apellidos').html("")
                        }

                        if(tipo_documento == "0"){
                            $('#error_tipo').html(`<span class="badge badge-danger"><i class="fas fa-exclamation-triangle"></i> ${errores.tipo_documento}</span>`)
                        } else {
                            $('#error_tipo').html("")
                        }

                        if(numero == "" || numero == null){
                            $('#error_number_doc').html(`<span class="badge badge-danger"><i class="fas fa-exclamation-triangle"></i> ${errores.numero}</span>`)
                        } else{
                            $('#error_number_doc').html("")
                        }

                        if((email == "" || email == null)){
                            $('#error_email').html(`<span class="badge badge-danger"><i class="fas fa-exclamation-triangle"></i> ${errores.email}</span>`)
                        } else {
                            $('#error_email').html("")
                        }

                        if(errores.email){
                            $('#error_email').html(`<span class="badge badge-danger"><i class="fas fa-exclamation-triangle"></i> ${errores.email}</span>`)
                        }else {
                            $('#error_email').html("")
                        }


                        if(direccion == "" || direccion == null){
                            $('#error_direccion').html(`<span class="badge badge-danger" id="msg_dir"><i class="fas fa-exclamation-triangle"></i> ${errores.direccion}</span>`)
                        } else {
                            $('#error_direccion').html("")
                        }
                    }

                    console.log(errores)
            }
        })


    })

    $('#btn-limpiar').click(function(e){
        e.preventDefault
        formulario.reset()
        document.getElementById('fullname').removeAttribute("style")
        document.getElementById('apellidos').removeAttribute("style")
        document.getElementById('number_doc').removeAttribute("style")
        document.getElementById('mensaje').style.display = "none"
        document.getElementById('mensaje_ap').style.display = "none"
        document.getElementById('mensaje_numero').style.display = "none"



    })

</script>

</body>
</html>
