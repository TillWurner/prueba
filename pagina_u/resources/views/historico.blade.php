<!DOCTYPE html>
<html lang="es">
@extends('navbar')
@section('content')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Histórico</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" type="text/css" href={{ asset("/css/ticket.css") }}>
</head>

<body>
    <div class="m-3" id="invoice">
        <div class="toolbar hidden-print">
            <div class="float-right">
                <button id="printInvoice" class="btn btn-info" onclick="imprimir()"><i class="fa fa-print"></i> Imprimir</button>
            </div>
            <h4>Histórico</h4>
            <hr>
        </div>
        <div class="invoice overflow-auto">
            <div style="min-width: 600px">
                <main>
                    <div class="row contacts">
                        <div class="col invoice-to">
                            <div class="text-gray-light">ESTUDIANTE :</div>
                            <h2 class="to">221177973</h2>
                            <div class="address">CORDOVA PEDRAZAS CARLOS DIEGO</div>
                        </div>
                        <div class="col invoice-details">
                            <h1 class="invoice-id">P.P.A.C. 61</h1>
                            <div class="address">(118-5) INGENIER═A ELECTROMEC┴NICA</div>
                        </div>
                    </div>
                    <table border="0" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th class="text-left">NIVEL</th>
                                <th class="text-left">CARRERA</th>
                                <th class="text-left">MATERIA</th>
                                <th class="text-left">PERIODO</th>
                                <th class="text-right">NOTA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-left">1</td>
                                <td class="text-left">118 - 5</td>
                                <td class="text-left">MAT100 - ALGEBRA I</td>
                                <td class="text-left">2-2021</td>
                                <td class="unit bg-danger text-white">25</td>
                            </tr>
                            <tr>
                                <td class="text-left">1</td>
                                <td class="text-left">118 - 5</td>
                                <td class="text-left">MAT101 - CALCULO I</td>
                                <td class="text-left">2-2021</td>
                                <td class="unit bg-danger text-white">0</td>
                            </tr>
                            <tr>
                                <td class="text-left">1</td>
                                <td class="text-left">118 - 5</td>
                                <td class="text-left">MEC103 - DIBUJO MECANICO</td>
                                <td class="text-left">2-2021</td>
                                <td class="unit bg-success text-white">65</td>
                            </tr>
                            <tr>
                                <td class="text-left">1</td>
                                <td class="text-left">118 - 5</td>
                                <td class="text-left">FIS100 - FISICA I</td>
                                <td class="text-left">2-2021</td>
                                <td class="unit bg-success text-white">62</td>
                            </tr>
                            <tr>
                                <td class="text-left">1</td>
                                <td class="text-left">118 - 5</td>
                                <td class="text-left">QMC100 - QUIMICA GENERAL</td>
                                <td class="text-left">2-2021</td>
                                <td class="unit bg-success text-white">59</td>
                            </tr>
                            <tr>
                                <td class="text-left">1</td>
                                <td class="text-left">118 - 5</td>
                                <td class="text-left">MAT100 - ALGEBRA I</td>
                                <td class="text-left">1-2022</td>
                                <td class="unit bg-success text-white">68</td>
                            </tr>
                            <tr>
                                <td class="text-left">1</td>
                                <td class="text-left">118 - 5</td>
                                <td class="text-left">MAT101 - CALCULO I</td>
                                <td class="text-left">1-2022</td>
                                <td class="unit bg-success text-white">82</td>
                            </tr>
                            <tr>
                                <td class="text-left">2</td>
                                <td class="text-left">118 - 5</td>
                                <td class="text-left">EMA200 - INGENIERIA LEGAL Y MEDIOAMBIENTAL</td>
                                <td class="text-left">1-2022</td>
                                <td class="unit bg-success text-white">75</td>
                            </tr>
                            <tr>
                                <td class="text-left">3</td>
                                <td class="text-left">118 - 5</td>
                                <td class="text-left">MEC232 - TECNOLOGIA DE LOS MATERIALES</td>
                                <td class="text-left">1-2022</td>
                                <td class="unit bg-success text-white">76</td>
                            </tr>

                            <tr>
                                <td class="text-left">2</td>
                                <td class="text-left">118 - 5</td>
                                <td class="text-left">FIS102 - FISICA II</td>
                                <td class="text-left">2-2022</td>
                                <td class="unit bg-success text-white">70</td>
                            </tr>

                            <tr>
                                <td class="text-left">3</td>
                                <td class="text-left">118 - 5</td>
                                <td class="text-left">MEC233 - TERMODINAMICA I</td>
                                <td class="text-left">2-2022</td>
                                <td class="unit bg-success text-white">82</td>
                            </tr>
{{-- ---------------------------------------------------- --}}
                            <tr>
                                <td class="text-left">2</td>
                                <td class="text-left">118 - 5</td>
                                <td class="text-left">MAT103 - ALGEBRA II</td>
                                <td class="text-left">2-2022</td>
                                <td class="unit bg-success text-white">54</td>
                            </tr>
                            <tr>
                                <td class="text-left">2</td>
                                <td class="text-left">118 - 5</td>
                                <td class="text-left">FIS102 - FISICA II</td>
                                <td class="text-left">2-2022</td>
                                <td class="unit bg-success text-white">73</td>
                            </tr>
                            <tr>
                                <td class="text-left">2</td>
                                <td class="text-left">118 - 5</td>
                                <td class="text-left">MAT102 - CALCULO II</td>
                                <td class="text-left">2-2022</td>
                                <td class="unit bg-success text-white">61</td>
                            </tr>
                            <tr>
                                <td class="text-left">2</td>
                                <td class="text-left">118 - 5</td>
                                <td class="text-left">MAT270 - PROBABILIDAD Y ESTADISTICA</td>
                                <td class="text-left">2-2022</td>
                                <td class="unit bg-success text-white">71</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="notices">
                        <div class="notice">
                            <dl>
                                <dt>PPA = ∑ crédito de la materia x notas/ ∑ créditos</dt>
                                <dd>* se toma en cuenta las materias con nota cero</dd>
                                <dd>* se toma en cuenta todas las materias inscritas sin importar si tuvo mas de una
                                    carrera</dd>
                                <dt>PPAC = ∑ crédito de la materia x notas/ ∑ créditos</dt>
                                <dd>* se toma en cuenta las materias con nota cero</dd>
                                <dd>* se toma en cuenta las materias de una carrera</dd>
                                <dt>PPASC = ∑ crédito de la materia x notas/ ∑ créditos</dt>
                                <dd>* no se toma en cuenta las materias con nota cero</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="notices">
                        <div>AVISO:</div>
                        <div class="notice">Documento no válido para trámites.</div>
                    </div>
                </main>
            </div>
            <div></div>
        </div>
    </div>
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#printInvoice').click(function() {
                $(this).attr('disabled', 'disabled');
                Popup($('.invoice')[0].outerHTML);

                function Popup(data) {
                    window.print();
                    $('#printInvoice').removeAttr('disabled');
                    return true;
                }
            });
        });
    </script>


<script>
        function imprimir() {
                    window.print()
                }
</script>

</body>

</html>
@endsection
