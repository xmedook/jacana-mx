@extends('master')

@section('title', 'Aviso de Privacidad')

@section('content')
<div id="aviso">
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if(app()->getLocale() == 'es')
                <h1 class="font-outfit text-uppercase mb-4">Aviso de Privacidad</h1>

                <p>Con fundamento en los artículos 15 y 16 de la Ley Federal de Protección de Datos
                    Personales en Posesión de Particulares hacemos de su conocimiento que Urbanifica S.A.
                    de C.V., con domicilio en José María Vigil, 2884-2, Colonia Lomas de Providencia,
                    Guadalajara, Jalisco, CP 44657, es responsable de recabar sus datos personales, del uso
                    que se le dé a los mismos y de su protección.</p>
                <p>Su información personal será utilizada para los siguientes fines:</p>
                <p> Proveer los servicios y
                    productos que ha solicitado; notificarle sobre nuevos servicios o productos que tengan
                    relación con los ya contratados o adquiridos; comunicarle sobre cambios en los mismos;
                    elaborar estudios y programas que son necesarios para determinar hábitos de consumo;
                    realizar evaluaciones periódicas de nuestros productos y servicios a efecto de mejorar la
                    calidad de los mismos; evaluar la calidad del servicio que brindamos, y en general, para
                    dar cumplimiento a las obligaciones que hemos contraído con usted. Para las finalidades
                    antes mencionadas, requerimos obtener los siguientes datos personales:<br /><br />
                    Nombre completo,<br />
                    Edad,<br /> Estado civil,<br /> Sexo,<br /> Teléfono fijo y/o celular,<br /> Correo
                    electrónico,<br /> ID de
                    Facebook,<br /> Twitter y/o LinkedIn,<br /> Firma autógrafa,<br /> Dirección,<br /> Nivel de
                    escolaridad<br />
                    RFC y/o CURP,<br /> nivel de ingreso,<br /> estados de cuenta de nómina,<br /> números de seguro
                    social.</p>
                <p>Es importante informarle que usted tiene derecho al Acceso, Rectificación y Cancelación
                    de sus datos personales, a ponerse al tratamiento de los mismo o a revocar el
                    consentimiento que para dicho fin nos haya otorgado. Para ello, es necesario que envíe la
                    solicitud en los términos que marca la Ley en su Art. 29 a nuestro Departamento de
                    Protección de Datos Personales, ubicado en José María Vigil, 2884-2, Colonia Lomas de
                    Providencia, Guadalajara, Jalisco, CP 44657, o bien, se comunique al teléfono (33) 33 65
                    33 00 o vía correo electrónico a rodrigo.tostado@braycoproyectos.com, el cual
                    solicitamos que confirme vía telefónica para garantizar su correcta recepción.</p>
                <p>Por otra parte, hacemos de su conocimiento que sus datos podrán ser transferidos a
                    entidades del mismo grupo de interés de la empresa, nacionales o extranjeras, con el
                    objetivo general de cumplir con las finalidades para las cuales ha proporcionado sus datos.
                    Propósitos específicos: Trámite de Créditos, Contratos de Compraventa, Contratos de
                    Arrendamiento. En este sentido su información podrá ser compartida con las empresas
                    que a continuación se mencionan: INFONAVIT, FOVISSSTE, Instituciones Bancarias,
                    Despacho de Abogados, Despacho de contadores, Brokers Hipotecarios.</p>
                <p>En caso de que no obtengamos su oposición expresa para que sus datos personales sean
                    transferidos en la forma y términos antes descritos, entenderemos que ha otorgado su
                    consentimiento en forma tácita para ello.</p>
                @else
                <h1 class="font-outfit text-uppercase mb-4">Privacy Notice</h1>


                <p>Urbanifica S.A. de C.V., with address at José María Vigil, 2884-2, Colonia Lomas de
                    Providencia, Guadalajara, Jalisco, CP 44657, is responsible for collecting your personal
                    data, the use that is given to it and its protection.</p>
                <p>Your personal information will be used for the following purposes:</p>
                <p>Provide the services and products you have requested. <br />
                    Notify you about new services or products that are related to those already contracted or
                    acquired.<br />
                    Communicate about changes in them.<br />
                    Prepare studies and programs that are necessary to determine consumption habits.
                    Carry out periodic evaluations of our products and services to improve their quality.
                    Evaluate the quality of the service we provide.<br />
                    In general, to comply with the obligations that we have contracted with you.
                    For the aforementioned purposes, we require obtaining the following personal data:</p>
                <p>Full name.<br />
                    Age.<br />
                    Marital status.<br />
                    Gender.<br />
                    Landline and/or cell phone number.<br />
                    Email.<br />
                    Facebook, Twitter and/or LinkedIn ID.<br />
                    Autograph signature.<br />
                    Address.<br />
                    Educational level.<br />
                    RFC and/or CURP.<br />
                    Income level.<br />
                    Payroll account statements.<br />
                    Social security numbers.</p>
                <p>It is important to inform you that you have the right to access, rectify and cancel your
                    personal data, to oppose the processing of the same or to revoke the consent that you
                    have given us for this purpose. To do this, it is necessary that you send the request in the
                    terms established by the Law in its Art. 29 to our Personal Data Protection Department,
                    located at José María Vigil, 2884-2, Colonia Lomas de Providencia, Guadalajara, Jalisco, CP
                    44657, or call (33) 33 65 33 00 or via email to rodrigo.tostado@braycoproyectos.com,
                    which we request you confirm by phone to guarantee its correct reception.</p>
                <p>On the other hand, we inform you that your data may be transferred to entities of the
                    same group of interest of the company, national or foreign, with the general objective of
                    complying with the purposes for which you have provided your data. Specific purposes:
                    Credit Procedures, Purchase-Sale Contracts, Lease Contracts. In this sense, your
                    information may be shared with the following companies: INFONAVIT, FOVISSSTE, Banking
                    Institutions, Law Firm, Accounting Firm, Mortgage Brokers.</p>
                <p>In case we do not obtain your express opposition to your personal data being transferred
                    in the manner and terms described above, we will understand that you have tacitly
                    granted your consent to do so.</p>
                <p>This Privacy Notice is subject to change, so we recommend that you periodically consult it.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection