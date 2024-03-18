<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberNet</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="navbar">
        <div class="navbar-right">
            <a href="{{ route('login') }}">Login</a>
        </div>
    </div>
    <div class="container">
        <div class="slider">
            <div class="slides">
                <div class="slide">
                    <img src="{{ asset('img/banner.png') }}" alt="Imagen 1">
                    <div class="form-container">
                        <form id="formulario" method="POST">
                            @csrf
                            <label>¡<span class="form-title">NUEVAS PROMOS ESTE 2024</span>!<br>
                                <span> Tenemos nuevos planes para ti.</span>
                                <span>Fibra Optica en tu hogar:</span>
                            </label>
                            <input type="text" name="celular_dato_promocion" placeholder="Ingresa tu celular"><br>
                            <input type="text" name="dni_dato_promocion" placeholder="DNI"><br><br>
                            <input type="submit" value="Enviar">
                        </form>
                        <div id="success-message"></div>
                    </div>
                </div>
                <div class="slide"><img src="{{ asset('img/pausas-activas-772x432-1-772x432.jpg') }}" alt="Imagen 2"></div>
                <div class="slide"><img src="{{ asset('img/pdf_logo (2).webp') }}" alt="Imagen 3"></div>
            </div>
            <button class="prev">&#10094;</button>
            <button class="next">&#10095;</button>
        </div>
    </div>
    <div class="footer">
        <p>CyberNet © 2024</p>
    </div>
    <script>
        let index = 0;
        const slides = document.querySelectorAll('.slide');
        const totalSlides = slides.length;

        document.querySelector('.prev').addEventListener('click', () => {
            index = (index > 0) ? index - 1 : totalSlides - 1;
            updateSlidePosition();
        });

        document.querySelector('.next').addEventListener('click', () => {
            index = (index < totalSlides - 1) ? index + 1 : 0;
            updateSlidePosition();
        });

        function updateSlidePosition() {
            for (let slide of slides) {
                slide.style.transform = `translateX(-${index * 100}%)`;
            }
        }
    </script>
    <script>
        $('#formulario').on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                url: "{{ route('inicio.store') }}",
                type: 'POST',
                data: $(this).serialize(),
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function(response) {
                    $('#success-message').text(response.success);
                    $('input[name="celular_dato_promocion"]').val('');
                    $('input[name="dni_dato_promocion"]').val('');
                },
                error: function(error) {
                    console.error('Error al enviar los datos');
                }
            });
        });
    </script>

</body>

</html>