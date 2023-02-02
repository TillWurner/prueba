<!DOCTYPE html>
<html lang="en" dir="ltr">
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html>
  <body>
    <table width="100%" style="background-color: #004080 ; margin-left: -50px ; margin-top: -12px ; width: 1578px;">
      <tbody><tr>
        <td width="62%"></td>
        <td width="12%"><div align="right"><img src={{URL::asset('/img/F1.jpg')}} width="102" height="75"></div></td>
        <td width="10%"><div align="right"><img src={{URL::asset('/img/F2.jpg')}} width="78" height="91"></div></td>
        <td width="16%"><div align="right"><img src={{URL::asset('/img/F3.jpg')}} width="116" height="81"></div></td>
      </tr></tbody>
    </table>
    <div class="row">
      <div style="background-color: #2A3964;font-family: Verdana; margin-left: 5px ; margin-top: 0px ; width: 12% ; height: 1390px; display:block;" > {{-- TODO EL SIDEBAR --}}
        <br>
        <h4 style=" font-size: 18px ; color: #B8D8F8 ; text-align: center; margin-top: 10px">Consultas <br> Estudiantes</h4>
        <br>
        <a style=" margin-left: 15px ; width: 90% ;display:block; background-color: #B8D8F8; color: #000066; display: block; font-size: 11px; font-weight: bold; margin-bottom: 25px; margin-top: -20px ; padding: 6px 8px; text-decoration: none;" href="{{ route('datospersonales') }}">Datos Personales</a>
        <a style=" margin-left: 15px ; width: 90% ; display:block;background-color: #B8D8F8; color: #000066; display: block; font-size: 11px; font-weight: bold; margin-bottom: 25px; margin-top: -20px ; padding: 6px 8px; text-decoration: none;" href="{{ route('historico') }}">Histórico</a>
        <a style=" margin-left: 15px ; width: 90% ; display:block;background-color: #B8D8F8; color: #000066; display: block; font-size: 11px; font-weight: bold; margin-bottom: 25px; margin-top: -20px ; padding: 6px 8px; text-decoration: none;" href="{{ route('avance_academico') }}">Avance Académico</a>
        <a style=" margin-left: 15px ; width: 90% ; display:block;background-color: #B8D8F8; color: #000066; display: block; font-size: 11px; font-weight: bold; margin-bottom: 25px; margin-top: -20px ; padding: 6px 8px; text-decoration: none;" href="#">Boleta de Inscripción</a>
        <a style=" margin-left: 15px ; width: 90% ; display:block;background-color: #B8D8F8; color: #000066; display: block; font-size: 11px; font-weight: bold; margin-bottom: 25px; margin-top: -20px ; padding: 6px 8px; text-decoration: none;" href="#">Malla Curricular</a>
        <a style=" margin-left: 15px ; width: 90% ; display:block;background-color: #B8D8F8; color: #000066; display: block; font-size: 11px; font-weight: bold; margin-bottom: 25px; margin-top: -20px ; padding: 6px 8px; text-decoration: none;" href="#">Notas Semestrales</a>
        <a style=" margin-left: 15px ; width: 90% ; display:block;background-color: #B8D8F8; color: #000066; display: block; font-size: 11px; font-weight: bold; margin-bottom: 25px; margin-top: -20px ; padding: 6px 8px; text-decoration: none;" href="#">Consulta Libros</a>
        <a style=" margin-left: 15px ; width: 90% ; display:block;background-color: #B8D8F8; color: #000066; display: block; font-size: 11px; font-weight: bold; margin-bottom: 25px; margin-top: -20px ; padding: 6px 8px; text-decoration: none;" href="#">Pagos en Caja</a>
        <a style=" margin-left: 15px ; width: 90% ; display:block;background-color: #B8D8F8; color: #000066; display: block; font-size: 11px; font-weight: bold; margin-bottom: 25px; margin-top: -20px ; padding: 6px 8px; text-decoration: none;" href="#">Form. Titulados</a>
        <a style=" margin-left: 15px ; width: 90% ; display:block;background-color: #B8D8F8; color: #000066; display: block; font-size: 11px; font-weight: bold; margin-bottom: 25px; margin-top: -20px ; padding: 6px 8px; text-decoration: none;" href="#">Bibliotecas Virtuales</a>
        <a style=" margin-left: 15px ; width: 90% ; display:block;background-color: #B8D8F8; color: #000066; display: block; font-size: 11px; font-weight: bold; margin-bottom: 25px; margin-top: -20px ; padding: 6px 8px; text-decoration: none;" href="#">Bloqueos</a>
        <a style=" margin-left: 15px ; width: 90% ; display:block;background-color: #B8D8F8; color: #000066; display: block; font-size: 11px; font-weight: bold; margin-bottom: 25px; margin-top: -20px ; padding: 6px 8px; text-decoration: none;" href="#">Avance de Contenido</a>
        <a style=" margin-left: 15px ; width: 90% ; display:block;background-color: #B8D8F8; color: #000066; display: block; font-size: 11px; font-weight: bold; margin-bottom: 25px; margin-top: -20px ; padding: 6px 8px; text-decoration: none;" href="#">Evaluacion Academica</a>
        <a style=" margin-left: 15px ; width: 90% ; display:block;background-color: #B8D8F8; color: #000066; display: block; font-size: 11px; font-weight: bold; margin-bottom: 25px; margin-top: -20px ; padding: 6px 8px; text-decoration: none;" href="#">Fecha de Análisis</a>
        <a style=" margin-left: 15px ; width: 90% ; display:block;background-color: #B8D8F8; color: #000066; display: block; font-size: 11px; font-weight: bold; margin-bottom: 25px; margin-top: -20px ; padding: 6px 8px; text-decoration: none;" href="#">Form. Beca IDH</a>
        <a style=" margin-left: 15px ; width: 90% ; display:block;background-color: #B8D8F8; color: #000066; display: block; font-size: 11px; font-weight: bold; margin-bottom: 25px; margin-top: -20px ; padding: 6px 8px; text-decoration: none;" href="#">Control de Materias</a>
        <a style=" margin-left: 15px ; width: 90% ; display:block;background-color: #B8D8F8; color: #000066; display: block; font-size: 11px; font-weight: bold; margin-bottom: 25px; margin-top: -20px ; padding: 6px 8px; text-decoration: none;" href="#">Cambiar Contraseña</a>
        <a style=" margin-left: 15px ; width: 90% ; display:block;background-color: #B8D8F8; color: #000066; display: block; font-size: 11px; font-weight: bold; margin-bottom: 25px; margin-top: -20px ; padding: 6px 8px; text-decoration: none;" href="#">Solicitar Sevicio</a>
        <a style=" margin-left: 15px ; width: 90% ; display:block;background-color: #B8D8F8; color: #000066; display: block; font-size: 11px; font-weight: bold; margin-bottom: 25px; margin-top: -20px ; padding: 6px 8px; text-decoration: none;" href="#">Expociencia</a>
        <a style=" margin-left: 15px ; width: 90% ; display:block;background-color: #B8D8F8; color: #000066; display: block; font-size: 11px; font-weight: bold; margin-bottom: 25px; margin-top: -20px ; padding: 6px 8px; text-decoration: none;" href="#">Form. Titulados</a>
        <a style=" margin-left: 15px ; width: 90% ; display:block;background-color: #B8D8F8; color: #000066; display: block; font-size: 11px; font-weight: bold; margin-bottom: 25px; margin-top: -20px ; padding: 6px 8px; text-decoration: none;" href="#">Actividades DICiT</a>
        <a style=" margin-left: 15px ; width: 90% ; display:block;background-color: #B8D8F8; color: #000066; display: block; font-size: 11px; font-weight: bold; margin-bottom: 25px; margin-top: -20px ; padding: 6px 8px; text-decoration: none;" href="{{ route('login') }}">Salir</a>
        {{-- <button class="btn btn-secondary" >Imprimir</button> --}}
      </div>
      <div style="margin-top: -5px ;width: 80%;">
        <section  class="py-4" style="align-items: center ;  display: block"  >
          @yield('content')
        </section>
       </div>
    </div>


</body>

</html>
