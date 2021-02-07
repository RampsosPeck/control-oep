<template>
    <div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <div class="small-box sidebar-dark-primary">
                    <div class="inner">
                        <h3 style="color:#fff;"><i class="fa fa-id-card" aria-hidden="true"></i></h3>
                        <p style="color:#fff;"><b>Personal</b></p>
                    </div>
                    <div class="icon">
                        <img src="/img/lista.png" width="90" class="my-4">
                    </div>
                    <a href="#" class="small-box-footer">
                        VER <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="small-box sidebar-dark-primary">
                    <div class="inner">
                        <h3 style="color:#fff;"><i class="fa fa-qrcode" aria-hidden="true"></i></h3>
                        <p style="color:#fff;"><b>Escanear</b></p>
                    </div>
                    <div class="icon">
                        <img src="/img/qr-codes.png" width="90" class="my-4">
                    </div>
                    <a href="#" class="small-box-footer">
                        INICIAR <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="small-box sidebar-dark-primary">
                    <div class="inner">
                        <h3 style="color:#fff;"><i class="fa fa-indent" aria-hidden="true"></i></h3>
                        <p style="color:#fff;"><b>Reportes</b></p>
                    </div>
                    <div class="icon">
                        <img src="/img/reportes.png" width="90" class="my-4">
                    </div>
                    <a href="#" class="small-box-footer">
                        GENERAR <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <div class="small-box sidebar-dark-primary">
                    <div class="inner">
                        <h3 style="color:#fff;"><i class="fa fa-sitemap" aria-hidden="true"></i></h3>
                        <p style="color:#fff;"><b>Cargos</b></p>
                    </div>
                    <div class="icon">
                        <img src="/img/ballot.png" width="90" class="my-4">
                    </div>
                    <a href="#" class="small-box-footer">
                        VER <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="small-box sidebar-dark-primary">
                    <div class="inner">
                        <h3 style="color:#fff;"><i class="fa fa-check-square" aria-hidden="true"></i></h3>
                        <p style="color:#fff;"><b>Horario</b></p>
                    </div>
                    <div class="icon">
                        <img src="/img/clock.png" width="90" class="my-4">
                    </div>
                    <a href="#" class="small-box-footer">
                        VER <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="small-box sidebar-dark-primary">
                    <div class="inner">
                        <h3 style="color:#fff;"><i class="fa fa-list-ol" aria-hidden="true"></i></h3>
                        <p style="color:#fff;"><b>Registros</b></p>
                    </div>
                    <div class="icon">
                        <img src="/img/calendar.png" width="90" class="my-4">
                    </div>
                    <a href="#" class="small-box-footer">
                        VER <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>