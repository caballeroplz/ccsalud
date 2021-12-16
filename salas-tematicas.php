<!--SALAS TEMÁTICAS -->

<div class="col-lg-12">
    <label for="sala"> Sala temática </label>
    <select class="form-control" id="sala" name="sala" disabled>
        <option value="Administración, gestión y documentación clínica" <?php if(utf8_encode($rowr['sala'])=='Administración, gestión y documentación clínica'){echo 'selected';}?>>- Administración, gestión y documentación clínica</option>
        <option value="Cirugía y sus especialidades:" disabled>- Cirugía y sus especialidades:</option>
        <option value="Cirugía cardiovascular" <?php if(utf8_encode($rowr['sala'])=='Cirugía cardiovascular'){echo 'selected';}?>>o Cirugía cardiovascular</option>
        <option value="Cirugía general y del aparato digestivo"<?php if(utf8_encode($rowr['sala'])=='Cirugía general y del aparato digestivo'){echo 'selected';}?>>o Cirugía general y del aparato digestivo</option>
        <option value="Cirugía oral y maxilofacial" <?php if(utf8_encode($rowr['sala'])=='Cirugía oral y maxilofacial"'){echo 'selected';}?>>o Cirugía oral y maxilofacial</option>
        <option value="Cirugía ortopédica y traumatología" <?php if(utf8_encode($rowr['sala'])=='Cirugía ortopédica y traumatología'){echo 'selected';}?>>o Cirugía ortopédica y traumatología</option>
        <option value="Cirugía pediátrica" <?php if(utf8_encode($rowr['sala'])=='Cirugía pediátrica'){echo 'selected';}?>>o Cirugía pediátrica</option>
        <option value="Cirugía plástica estética y reparadora" <?php if(utf8_encode($rowr['sala'])=='Cirugía plástica estética y reparadora'){echo 'selected';}?>>o Cirugía plástica estética y reparadora</option>
        <option value="Cirugía torácica" <?php if(utf8_encode($rowr['sala'])=='Cirugía torácica'){echo 'selected';}?>>o Cirugía torácica</option>
        <option value="Cuidados básicos" <?php if(utf8_encode($rowr['sala'])=='Cuidados básicos'){echo 'selected';}?>>- Cuidados básicos</option>
        <option value="Cuidados paliativos" <?php if(utf8_encode($rowr['sala'])=='Cuidados paliativos'){echo 'selected';}?>>- Cuidados paliativos</option>
        <option value="Enfermería y sus especialidades:" disabled>- Enfermería y sus especialidades:</option>
        <option value="Enfermería de salud mental" <?php if( utf8_encode($rowr['sala'])=='Enfermería de salud mental'){echo 'selected';}?>>o Enfermería de salud mental</option>
        <option value="Enfermería del trabajo" <?php if(utf8_encode($rowr['sala'])=='Enfermería del trabajo'){echo 'selected';}?>>o Enfermería del trabajo</option>
        <option value="Enfermería familiar y comunitaria" <?php if(utf8_encode($rowr['sala'])=='Enfermería familiar y comunitaria'){echo 'selected';}?>>o Enfermería familiar y comunitaria</option>
        <option value="Enfermería geriátrica" <?php if(utf8_encode($rowr['sala'])=='Enfermería geriátrica'){echo 'selected';}?>>o Enfermería geriátrica</option>
        <option value="Enfermería obstétrico-ginecológica" <?php if(utf8_encode($rowr['sala'])=='Enfermería obstétrico-ginecológica'){echo 'selected';}?>>o Enfermería obstétrico-ginecológica</option>
        <option value="Enfermería pediátrica" <?php if(utf8_encode($rowr['sala'])=='Enfermería pediátrica'){echo 'selected';}?>>o Enfermería pediátrica</option>
        <option value="Especialidades médico-quirúrgicas:" disabled>- Especialidades médico-quirúrgicas:</option>
        <option value="Angiología y cirugía vascular" <?php if(utf8_encode($rowr['sala'])=='Angiología y cirugía vascular'){echo 'selected';}?>>o Angiología y cirugía vascular</option>
        <option value="Dermatología médico-quirúrgica y venereología" <?php if(utf8_encode($rowr['sala'])=='Dermatología médico-quirúrgica y venereología'){echo 'selected';}?>>o Dermatología médico-quirúrgica y venereología</option>
        <option value="Obstetricia y Ginecología Oftalmología" <?php if(utf8_encode($rowr['sala'])=='Obstetricia y Ginecología Oftalmología'){echo 'selected';}?>>o Obstetricia y Ginecología Oftalmología</option>
        <option value="Otorrinolaringología" <?php if(utf8_encode($rowr['sala'])=='Otorrinolaringología'){echo 'selected';}?>>o Otorrinolaringología</option>
        <option value="Urología" <?php if(utf8_encode($rowr['sala'])=='Urología'){echo 'selected';}?>>o Urología</option>
        <option value="Farmacia y sus especialidades:" disabled>- Farmacia y sus especialidades:</option>
        <option value="Farmacia hospitalaria" <?php if(utf8_encode($rowr['sala'])=='Farmacia hospitalaria'){echo 'selected';}?>>o Farmacia hospitalaria</option>
        <option value="Farmacología clínica" <?php if(utf8_encode($rowr['sala'])=='Farmacología clínica'){echo 'selected';}?>>o Farmacología clínica</option>
        <option value="Radiofarmacia" <?php if(utf8_encode($rowr['sala'])=='Radiofarmacia'){echo 'selected';}?>>o Radiofarmacia</option>
        <option value="Fisioterapiaud-Mental" <?php if(utf8_encode($rowr['sala'])=='Fisioterapiaud-Mental'){echo 'selected';}?>>- Fisioterapia</option>
        <option value="Logopedia, comunicación y lenguaje" <?php if(utf8_encode($rowr['sala'])=='Logopedia, comunicación y lenguaje'){echo 'selected';}?>>- Logopedia, comunicación y lenguaje</option>
        <option value="Medicina y sus especialidades:" disabled>- Medicina y sus especialidades:</option>
        <option value="Anatomía patológica" <?php if(utf8_encode($rowr['sala'])=='Anatomía patológica'){echo 'selected';}?>>o Anatomía patológica</option>
        <option value="Alergología" <?php if(utf8_encode($rowr['sala'])=='Alergología'){echo 'selected';}?>>o Alergología</option>
        <option value="Anestesiología y reanimación" <?php if(utf8_encode($rowr['sala'])=='Anestesiología y reanimación'){echo 'selected';}?>>o Anestesiología y reanimación</option>
        <option value="Aparato digestivo" <?php if(utf8_encode($rowr['sala'])=='Aparato digestivo'){echo 'selected';}?>>o Aparato digestivo</option>
        <option value="Bioquímica clínica" <?php if(utf8_encode($rowr['sala'])=='Bioquímica clínica'){echo 'selected';}?>>o Bioquímica clínica</option>
        <option value="Cardiología" <?php if(utf8_encode($rowr['sala'])=='Cardiología'){echo 'selected';}?>>o Cardiología</option>
        <option value="Endocrinología y nutrición" <?php if(utf8_encode($rowr['sala'])=='Endocrinología y nutrición'){echo 'selected';}?>>o Endocrinología y nutrición</option>
        <option value="Geriatría y gerontología" <?php if(utf8_encode($rowr['sala'])=='Geriatría y gerontología'){echo 'selected';}?>>o Geriatría y gerontología</option>
        <option value="Hematología y hemoterapia" <?php if(utf8_encode($rowr['sala'])=='Hematología y hemoterapia'){echo 'selected';}?>>o Hematología y hemoterapia</option>
        <option value="Inmunología" <?php if(utf8_encode($rowr['sala'])=='Inmunología'){echo 'selected';}?>>o Inmunología</option>
        <option value="Medicina del deporte" <?php if(utf8_encode($rowr['sala'])=='Medicina del deporte'){echo 'selected';}?>>o Medicina del deporte</option>
        <option value="Medicina del trabajo" <?php if(utf8_encode($rowr['sala'])=='Medicina del trabajo'){echo 'selected';}?>>o Medicina del trabajo</option>
        <option value="Medicina familiar y comunitaria" <?php if(utf8_encode($rowr['sala'])=='Medicina familiar y comunitaria'){echo 'selected';}?>>o Medicina familiar y comunitaria</option>
        <option value="Medicina física y rehabilitación" <?php if(utf8_encode($rowr['sala'])=='Medicina física y rehabilitación'){echo 'selected';}?>>o Medicina física y rehabilitación</option>
        <option value="Medicina intensiva" <?php if(utf8_encode($rowr['sala'])=='Medicina intensiva'){echo 'selected';}?>>o Medicina intensiva</option>
        <option value="Medicina interna" <?php if(utf8_encode($rowr['sala'])=='Medicina interna'){echo 'selected';}?>>o Medicina interna</option>
        <option value="Medicina legal y forense" <?php if(utf8_encode($rowr['sala'])=='Medicina legal y forense'){echo 'selected';}?>>o Medicina legal y forense</option>
        <option value="Medicina nuclear" <?php if(utf8_encode($rowr['sala'])=='Medicina nuclear'){echo 'selected';}?>>o Medicina nuclear</option>
        <option value="Medicina preventiva y salud pública" <?php if(utf8_encode($rowr['sala'])=='Medicina preventiva y salud pública'){echo 'selected';}?>>o Medicina preventiva y salud pública</option>
        <option value="Microbiología y parasitología" <?php if(utf8_encode($rowr['sala'])=='Microbiología y parasitología'){echo 'selected';}?>>o Microbiología y parasitología</option>
        <option value="Nefrología" <?php if(utf8_encode($rowr['sala'])=='Nefrología'){echo 'selected';}?>>o Nefrología</option>
        <option value="Neumología" <?php if(utf8_encode($rowr['sala'])=='Neumología'){echo 'selected';}?>>o Neumología</option>
        <option value="Neurocirugía" <?php if(utf8_encode($rowr['sala'])=='Neurocirugía'){echo 'selected';}?>>o Neurocirugía</option>
        <option value="Salud-Mental" <?php if(utf8_encode($rowr['sala'])=='Salud-Mental'){echo 'selected';}?>>o Neurofisiología clínica</option>
        <option value="Neurofisiología clínica" <?php if(utf8_encode($rowr['sala'])=='Neurofisiología clínica'){echo 'selected';}?>>o Neurología</option>
        <option value="Oncología médica" <?php if(utf8_encode($rowr['sala'])=='Oncología médica'){echo 'selected';}?>>o Oncología médica</option>
        <option value="Oncología radioterápica" <?php if(utf8_encode($rowr['sala'])=='Oncología radioterápica'){echo 'selected';}?>>o Oncología radioterápica</option>
        <option value="Pediatría" <?php if(utf8_encode($rowr['sala'])=='Pediatría'){echo 'selected';}?>>o Pediatría</option>
        <option value="Psiquiatría" <?php if(utf8_encode($rowr['sala'])=='Psiquiatría'){echo 'selected';}?>>o Psiquiatría</option>
        <option value="Radiodiagnóstico" <?php if(utf8_encode($rowr['sala'])=='Radiodiagnóstico'){echo 'selected';}?>>o Radiodiagnóstico</option>
        <option value="Radiofísica hospitalaria" <?php if(utf8_encode($rowr['sala'])=='Radiofísica hospitalaria'){echo 'selected';}?>>o Radiofísica hospitalaria</option>
        <option value="Reumatología" <?php if(utf8_encode($rowr['sala'])=='Reumatología'){echo 'selected';}?>>o Reumatología</option>
        <option value="Odontología" <?php if(utf8_encode($rowr['sala'])=='Odontología'){echo 'selected';}?>>- Odontología</option>
        <option value="Psicología clínica" <?php if(utf8_encode($rowr['sala'])=='Psicología clínica'){echo 'selected';}?>>- Psicología clínica</option>
        <option value="Urgencias, emergencias y cuidados críticos" <?php if(utf8_encode($rowr['sala'])=='Urgencias, emergencias y cuidados críticos'){echo 'selected';}?>>- Urgencias, emergencias y cuidados críticos</option>
    </select> 
    <span class="help-block" id="error"></span>
</div>