<?php
session_start();

if (!isset($_SESSION['login'])) {

    header("Location: ../../login.html");
    exit();

}

if (isset($_SESSION['rol'])) {

    $idrol = $_SESSION['rol'];
}

$display = "";
if ($idrol == 1) {
    $display = "style='display:none;'";
}

require_once "acciones.php";
require_once "../usuarios/acciones.php";

$id = $_GET['id'];
$disabled = "";
$autoFocus1 = '';
$autoFocus2 = '';
$autoFocus3 = '';
$autoFocus4 = '';
$autoFocus5 = '';
$autoFocus6 = '';
$autoFocus7 = '';
$autoFocus8 = '';

$_form = new formulario();
$_user = new usuarios();
$query_operators = $_user->get_users_rol(1);
$query_coordinator = $_user->get_users_rol(3);

$query = $_form->get_formulario($id);
$row = $query->fetch_assoc();

$nfo = isset($row["nfo"]) && $row["nfo"] != "" ? $row["nfo"] : '';
$numeroLote = isset($row["numeroLote"]) ? $row["numeroLote"] : '';

// Inicio validación Equipos
$query_equipos = $_form->get_formulario_equipos($id);
$row_equipos = $query_equipos->fetch_assoc();

if ($row_equipos['dietrich2'] == '1') {
    $dietrich2 = "checked";
    $d_dietrich2 = "readonly";
} else {
    $dietrich2 = "";
    $d_dietrich2 = "";
}

if ($row_equipos['fLukas'] == '1') {
    $fLukas = "checked";
    $d_fLukas = "readonly";
} else {
    $fLukas = "";
    $d_fLukas = "";
}

if ($row_equipos['contOlor'] == '1') {
    $contOlor = "checked";
    $d_contOlor = "readonly";
} else {
    $contOlor = "";
    $d_contOlor = "";
}

// Finaliza validación Equipos

// Inicio validación Materia Prima
$query_materias = $_form->get_formulario_materias($id);
$query_materia = $query_materias->fetch_assoc();

//Se agrega la consulta del lote de materia prima
if (isset($row["lote_nan000"]) && $row["lote_nan000"] != '') {
    $lote_nan000 = $row["lote_nan000"];
    $d_lote_nan000 = "readonly";
} else {
    $lote_nan000 = "";
    $d_lote_nan000 = "";
}

if (isset($row["nan000"]) && $row["nan000"] != '') {
    $nan000 = $row["nan000"];
    $d_nan000 = "readonly";
} else {
    $nan000 = "";
    $d_nan000 = "";
}

if (isset($row["lote_swf098"]) && $row["lote_swf098"] != '') {
    $lote_swf098 = $row["lote_swf098"];
    $d_lote_swf098 = "readonly";
} else {
    $lote_swf098 = "";
    $d_lote_swf098 = "";
}

if (isset($row["swf098"]) && $row["swf098"] != '') {
    $swf098 = $row["swf098"];
    $d_swf098 = "readonly";
} else {
    $swf098 = "";
    $d_swf098 = "";
}

if (isset($row["lote_stw000"]) && $row["lote_stw000"] != '') {
    $lote_stw000 = $row["lote_stw000"];
    $d_lote_stw000 = "readonly";
} else {
    $lote_stw000 = "";
    $d_lote_stw000 = "";
}
if (isset($row["stw000"]) && $row["stw000"] != '') {
    $stw000 = $row["stw000"];
    $d_stw000 = "readonly";
} else {
    $stw000 = "";
    $d_stw000 = "";
}

if (isset($row["lote_fdo037"]) && $row["lote_fdo037"] != '') {
    $lote_fdo037 = $row["lote_fdo037"];
    $d_lote_fdo037 = "readonly";
} else {
    $lote_fdo037 = "";
    $d_lote_fdo037 = "";
}
if (isset($row["fdo037"]) && $row["fdo037"] != '') {
    $fdo037 = $row["fdo037"];
    $d_fdo037 = "readonly";
} else {
    $fdo037 = "";
    $d_fdo037 = "";
}

if (isset($row["lote_myo000"]) && $row["lote_myo000"] != '') {
    $lote_myo000 = $row["lote_myo000"];
    $d_lote_myo000 = "readonly";
} else {
    $lote_myo000 = "";
    $d_lote_myo000 = "";
}
if (isset($row["myo000"]) && $row["myo000"] != '') {
    $myo000 = $row["myo000"];
    $d_myo000 = "readonly";
} else {
    $myo000 = "";
    $d_myo000 = "";
}

if (isset($row["lote_stw0002"]) && $row["lote_stw0002"] != '') {
    $lote_stw0002 = $row["lote_stw0002"];
    $d_lote_stw0002 = "readonly";
} else {
    $lote_stw0002 = "";
    $d_lote_stw0002 = "";
}
if (isset($row["stw0002"]) && $row["stw0002"] != '') {
    $stw0002 = $row["stw0002"];
    $d_stw0002 = "readonly";
} else {
    $stw0002 = "";
    $d_stw0002 = "";
}

if (isset($row["lote_csc050"]) && $row["lote_csc050"] != '') {
    $lote_csc050 = $row["lote_csc050"];
    $d_lote_csc050 = "readonly";
} else {
    $lote_csc050 = "";
    $d_lote_csc050 = "";
}
if (isset($row["csc050"]) && $row["csc050"] != '') {
    $csc050 = $row["csc050"];
    $d_csc050 = "readonly";
} else {
    $csc050 = "";
    $d_csc050 = "";
}

if (isset($row["lote_stw0003"]) && $row["lote_stw0003"] != '') {
    $lote_stw0003 = $row["lote_stw0003"];
    $d_lote_stw0003 = "readonly";
} else {
    $lote_stw0003 = "";
    $d_lote_stw0003 = "";
}
if (isset($row["stw0003"]) && $row["stw0003"] != '') {
    $stw0003 = $row["stw0003"];
    $d_stw0003 = "readonly";
} else {
    $stw0003 = "";
    $d_stw0003 = "";
}

if (isset($row["total_materia_p"]) && $row["total_materia_p"] != '') {
    $totalMP = intval($stw0003) +
        intval($csc050) +
        intval($stw0002) +
        intval($myo000) +
        intval($fdo037) +
        intval($stw000) +
        intval($swf098) +
        intval($nan000);
    $d_totalMP = "readonly";
} else {
    $totalMP = "";
    $d_totalMP = "";
}

// Finaliza validación Materia Prima

$script = '';

if (isset($row["MatPriFP04"]) && $row["MatPriFP04"] == '1') {
    $MatPriFP04Si = "checked";
    $MatPriFP04No = "";
    $d_MatPriFP04 = "readonly";
} else if (isset($row["MatPriFP04"]) && $row["MatPriFP04"] == '0') {
    $MatPriFP04Si = "";
    $MatPriFP04No = "checked";
    $d_MatPriFP04 = "";
} else {
    $MatPriFP04Si = "";
    $MatPriFP04No = "";
    $d_MatPriFP04 = "";
}

if (isset($row["MatPriSeparada"]) && $row["MatPriSeparada"] == '1') {
    $MatPriSeparadaSi = "checked";
    $MatPriSeparadaNo = "";
    $displayMatPriSeparada = "show";
    $d_MatPriSeparada = "readonly";
} else if (isset($row["MatPriSeparada"]) && $row["MatPriSeparada"] == '0') {
    $MatPriSeparadaSi = "";
    $MatPriSeparadaNo = "checked";
    $displayMatPriSeparada = "none";
    $d_MatPriSeparada = "";
} else {
    $MatPriSeparadaSi = "";
    $MatPriSeparadaNo = "";
    $displayMatPriSeparada = "none";
    $d_MatPriSeparada = "";
}

if (isset($row["ReactorLimpio"]) && $row["ReactorLimpio"] == '1') {
    $ReactorLimpioSi = "checked";
    $ReactorLimpioNo = "";
    $displayReactorLimpio = "show";
    $d_ReactorLimpio = "readonly";
    $autoFocus1 = 'autofocus';
} else if (isset($row["ReactorLimpio"]) && $row["ReactorLimpio"] == '0') {
    $ReactorLimpioSi = "";
    $ReactorLimpioNo = "checked";
    $displayReactorLimpio = "none";
    $d_ReactorLimpio = "";
} else {
    $ReactorLimpioSi = "";
    $ReactorLimpioNo = "";
    $displayReactorLimpio = "none";
    $d_ReactorLimpio = "";
}

// Inicio validación Equipos
$query_nfo = $_form->get_formulario_nfo($id);
$row_nfo = $query_nfo->fetch_assoc();

if (isset($row_nfo["HermeticidadReactor"]) && $row_nfo["HermeticidadReactor"] == '1') {
    $HermeticidadReactorSi = "checked";
    $HermeticidadReactorNo = "";
    $d_HermeticidadReactor = "readonly";
} else if (isset($row_nfo["HermeticidadReactor"]) && $row_nfo["HermeticidadReactor"] == '0') {
    $HermeticidadReactorSi = "";
    $HermeticidadReactorNo = "checked";
    $d_HermeticidadReactor = "";
} else {
    $HermeticidadReactorSi = "";
    $HermeticidadReactorNo = "";
    $d_HermeticidadReactor = "";
}

if (isset($row_nfo["ReactorFunciona"]) && $row_nfo["ReactorFunciona"] == '1') {
    $ReactorFuncionaSi = "checked";
    $ReactorFuncionaNo = "";
    $d_ReactorFunciona = "readonly";
} else if (isset($row_nfo["ReactorFunciona"]) && $row_nfo["ReactorFunciona"] == '0') {
    $ReactorFuncionaSi = "";
    $ReactorFuncionaNo = "checked";
    $d_ReactorFunciona = "";
} else {
    $ReactorFuncionaSi = "";
    $ReactorFuncionaNo = "";
    $d_ReactorFunciona = "";
}

if (isset($row_nfo["VacioFunciona"]) && $row_nfo["VacioFunciona"] == '1') {
    $VacioFuncionaSi = "checked";
    $VacioFuncionaNo = "";
    $d_VacioFunciona = "readonly";
} else if (isset($row_nfo["VacioFunciona"]) && $row_nfo["VacioFunciona"] == '0') {
    $VacioFuncionaSi = "";
    $VacioFuncionaNo = "checked";
    $d_VacioFunciona = "";
} else {
    $VacioFuncionaSi = "";
    $VacioFuncionaNo = "";
    $d_VacioFunciona = "";
}

if (isset($row_nfo["VaporFunciona"]) && $row_nfo["VaporFunciona"] == '1') {
    $VaporFuncionaSi = "checked";
    $VaporFuncionaNo = "";
    $d_VaporFunciona = "readonly";
} else if (isset($row_nfo["VaporFunciona"]) && $row_nfo["VaporFunciona"] == '0') {
    $VaporFuncionaSi = "";
    $VaporFuncionaNo = "checked";
    $d_VaporFunciona = "";
} else {
    $VaporFuncionaSi = "";
    $VaporFuncionaNo = "";
    $d_VaporFunciona = "";
}

if (isset($row_nfo["EnfriamientoFunciona"]) && $row_nfo["EnfriamientoFunciona"] == '1') {
    $EnfriamientoFuncionaSi = "checked";
    $EnfriamientoFuncionaNo = "";
    $d_EnfriamientoFunciona = "readonly";
} else if (isset($row_nfo["EnfriamientoFunciona"]) && $row_nfo["EnfriamientoFunciona"] == '0') {
    $EnfriamientoFuncionaSi = "";
    $EnfriamientoFuncionaNo = "checked";
    $d_EnfriamientoFunciona = "";
} else {
    $EnfriamientoFuncionaSi = "";
    $EnfriamientoFuncionaNo = "";
    $d_EnfriamientoFunciona = "";
}

if (isset($row_nfo["EmisionesFunciona"]) && $row_nfo["EmisionesFunciona"] == '1') {
    $EmisionesFuncionaSi = "checked";
    $EmisionesFuncionaNo = "";
    $displayEmisionesFunciona = "show";
    $d_EmisionesFunciona = "readonly";
} else if (isset($row_nfo["EmisionesFunciona"]) && $row_nfo["EmisionesFunciona"] == '0') {
    $EmisionesFuncionaSi = "";
    $EmisionesFuncionaNo = "checked";
    $displayEmisionesFunciona = "none";
    $d_EmisionesFunciona = "";
} else {
    $EmisionesFuncionaSi = "";
    $EmisionesFuncionaNo = "";
    $displayEmisionesFunciona = "none";
    $d_EmisionesFunciona = "";
}

if (isset($row_nfo["phsodatanque"]) && $row_nfo["phsodatanque"] == '1') {
    $phsodatanqueSi = "checked";
    $phsodatanqueNo = "";
    $displayCondensadorFunciona = "show";
    $d_phsodatanque = "readonly";
} else if (isset($row_nfo["phsodatanque"]) && $row_nfo["phsodatanque"] == '0') {
    $phsodatanqueSi = "";
    $phsodatanqueNo = "checked";
    $displayCondensadorFunciona = "none";
    $d_phsodatanque = "";
} else {
    $phsodatanqueSi = "";
    $phsodatanqueNo = "";
    $displayCondensadorFunciona = "none";
    $d_phsodatanque = "";
}

if (isset($row_nfo["CondensadorFunciona"]) && $row_nfo["CondensadorFunciona"] == '1') {
    $CondensadorFuncionaSi = "checked";
    $CondensadorFuncionaNo = "";
    $displayApruebaInicio = "show";
    $d_CondensadorFunciona = "readonly";
} else if (isset($row_nfo["CondensadorFunciona"]) && $row_nfo["CondensadorFunciona"] == '0') {
    $CondensadorFuncionaSi = "";
    $CondensadorFuncionaNo = "";
    $displayApruebaInicio = "none";
    $d_CondensadorFunciona = "";
} else {
    $CondensadorFuncionaSi = "";
    $CondensadorFuncionaNo = "";
    $displayApruebaInicio = "none";
    $d_CondensadorFunciona = "";
}

if (isset($row_nfo["ApruebaInicio"]) && $row_nfo["ApruebaInicio"] == '1') {
    $ApruebaInicioSi = "checked";
    $ApruebaInicioNo = "";
    $displayRazonesNoAprob = "none";
    $displayInicioProceso = "show";
    $d_ApruebaInicio = "readonly";
} else if (isset($row_nfo["ApruebaInicio"]) && $row_nfo["ApruebaInicio"] == '0') {
    $ApruebaInicioSi = "";
    $ApruebaInicioNo = "checked";
    $displayRazonesNoAprob = "show";
    $displayInicioProceso = "none";
    $d_ApruebaInicio = "";
} else {
    $ApruebaInicioSi = "";
    $ApruebaInicioNo = "";
    $displayRazonesNoAprob = "show";
    $displayInicioProceso = "none";
    $d_ApruebaInicio = "";
}

if (isset($row["RazonesNoAprob"])) {
    $RazonesNoAprob = $row["RazonesNoAprob"];
    $d_RazonesNoAprob = "readonly";
} else {
    $RazonesNoAprob = "";
    $d_RazonesNoAprob = "";
}

if (isset($row_nfo["SeguridadNaftaleno"]) && $row_nfo["SeguridadNaftaleno"] == '1') {
    $SeguridadNaftalenoSi = "checked";
    $SeguridadNaftalenoNo = "";
    $EquipoSeguridad = "show";
    $d_SeguridadNaftaleno = "readonly";
    $autoFocus1 = '';
    $autoFocus2 = 'autofocus';
} else if (isset($row_nfo["SeguridadNaftaleno"]) && $row_nfo["SeguridadNaftaleno"] == '0') {
    $SeguridadNaftalenoSi = "";
    $SeguridadNaftalenoNo = "checked";
    $EquipoSeguridad = "none";
    $d_SeguridadNaftaleno = "";
} else {
    $SeguridadNaftalenoSi = "";
    $SeguridadNaftalenoNo = "";
    $EquipoSeguridad = "none";
    $d_SeguridadNaftaleno = "";
}

if (isset($row_nfo["EquipoNaftaleno"]) && $row_nfo["EquipoNaftaleno"] == '1') {
    $EquipoNaftalenoSi = "checked";
    $EquipoNaftalenoNo = "";
    $TrituradoSaco = "show";
    $d_EquipoNaftaleno = "readonly";
} else if (isset($row_nfo["EquipoNaftaleno"]) && $row_nfo["EquipoNaftaleno"] == '0') {
    $EquipoNaftalenoSi = "";
    $EquipoNaftalenoNo = "checked";
    $TrituradoSaco = "none";
    $d_EquipoNaftaleno = "";
} else {
    $EquipoNaftalenoSi = "";
    $EquipoNaftalenoNo = "";
    $TrituradoSaco = "none";
    $d_EquipoNaftaleno = "";
}

if (isset($row_nfo["EnfriamientoCerrado"]) && $row_nfo["EnfriamientoCerrado"] == '1') {
    $EnfriamientoCerrado = "checked";
    $TrituradoSaco2 = "show";
    $d_EnfriamientoCerrado = "readonly";
} else {
    $EnfriamientoCerrado = "";
    $TrituradoSaco2 = "none";
    $d_EnfriamientoCerrado = "";
}

// Paso 5   28
// Inicio validación Equipos
$query_etapas = $_form->get_formulario_etapas($id, 'triturado');
$row_etapas1 = $query_etapas->fetch_assoc();
if (isset($row_etapas1["HoraInicio"]) && $row_etapas1["HoraInicio"] != '') {
    $horainiciocarganaf = $row_etapas1["HoraInicio"];
    $d_horainiciocarganaf = "readonly";
} else {
    $horainiciocarganaf = "";
    $d_horainiciocarganaf = "";
}

if (isset($row_etapas1["HoraFin"]) && $row_etapas1["HoraFin"] != '') {
    $horafincarganaf = $row_etapas1["HoraFin"];
    $d_horafincarganaf = "readonly";
} else {
    $horafincarganaf = "";
    $d_horafincarganaf = "";
}

if (isset($row_nfo["ValvBloqueo"]) && $row_nfo["ValvBloqueo"] == '1') {
    $ValvBloqueo = "checked";
    $d_ValvBloqueo = "readonly";
} else {
    $ValvBloqueo = "";
    $d_ValvBloqueo = "";
}

if (isset($row_nfo["AbrirControlOlores"]) && $row_nfo["AbrirControlOlores"] == '1') {
    $AbrirControlOlores = "checked";
    $d_AbrirControlOlores = "readonly";
} else {
    $AbrirControlOlores = "";
    $d_AbrirControlOlores = "";
}

if (isset($row_nfo["Estartazos"]) && $row_nfo["Estartazos"] == '1') {
    $Estartazos = "checked";
    $d_Estartazos = "readonly";
} else {
    $Estartazos = "";
    $d_Estartazos = "";
}

$query_etapas = $_form->get_formulario_etapas($id, 'fusion');
$row_etapas2 = $query_etapas->fetch_assoc();

if (isset($row_etapas2["HoraInicio"]) && $row_etapas2["HoraInicio"] != '') {
    $horainiciofusionnaf = $row_etapas2["HoraInicio"];
    $d_horainiciofusionnaf = "readonly";
} else {
    $horainiciofusionnaf = "";
    $d_horainiciofusionnaf = "";
}

if (isset($row_etapas2["Temperatura"]) && $row_etapas2["Temperatura"] != '') {
    $temp1 = $row_etapas2["Temperatura"];
    $d_temp1 = "readonly";
} else {
    $temp1 = "";
    $d_temp1 = "";
}

if (isset($row_etapas2["Presion"]) && $row_etapas2["Presion"] != '') {
    $presion1 = $row_etapas2["Presion"];
    $d_presion1 = "readonly";
} else {
    $presion1 = "";
    $d_presion1 = "";
}

if (isset($row_etapas2["HoraFin"]) && $row_etapas2["HoraFin"] != '') {
    $horafinfusionnaf = $row_etapas2["HoraFin"];
    $d_horafinfusionnaf = "readonly";
} else {
    $horafinfusionnaf = "";
    $d_horafinfusionnaf = "";
}


if (isset($row_nfo["AgitadorOk"]) && $row_nfo["AgitadorOk"] == '1') {
    $AgitadorOkSi = "checked";
    $AgitadorOkNo = "";
    $d_AgitadorOk = "readonly";
} else if (isset($row_nfo["AgitadorOk"]) && $row_nfo["AgitadorOk"] == '0') {
    $AgitadorOkSi = "";
    $AgitadorOkNo = "checked";
    $d_AgitadorOk = "";
} else {
    $AgitadorOkSi = "";
    $AgitadorOkNo = "";
    $d_AgitadorOk = "";
}

if (isset($row_nfo["ProblemaFund"]) && $row_nfo["ProblemaFund"] == '1') {
    $ProblemaFundSi = "checked";
    $ProblemaFundNo = "";
    $AfirmativaRespuesta = "show";
    $Carga710 = "none";
    $d_ProblemaFund = "readonly";
} else if (isset($row_nfo["ProblemaFund"]) && $row_nfo["ProblemaFund"] == '0') {
    $ProblemaFundSi = "";
    $ProblemaFundNo = "checked";
    $AfirmativaRespuesta = "none";
    $Carga710 = "show";
    $d_ProblemaFund = "";
} else {
    $ProblemaFundSi = "";
    $ProblemaFundNo = "";
    $AfirmativaRespuesta = "none";
    $Carga710 = "none";
    $d_ProblemaFund = "";
}

if (isset($row_nfo["ProblemaFundirNaf"]) && $row_nfo["ProblemaFundirNaf"] != '') {
    $ProblemaFundirNaf = $row_nfo["ProblemaFundirNaf"];
    $d_ProblemaFundirNaf = "readonly";
} else {
    $ProblemaFundirNaf = "";
    $d_ProblemaFundirNaf = "";
}

// Paso 6
if (isset($row_nfo["SeguridadSulfurico"]) && $row_nfo["SeguridadSulfurico"] == '1') {
    $SeguridadSulfuricoSi = "checked";
    $SeguridadSulfuricoNo = "";
    $d_SeguridadSulfurico = "readonly";
    $autoFocus1 = '';
    $autoFocus2 = '';
    $autoFocus3 = 'autofocus';
} else if (isset($row_nfo["SeguridadSulfurico"]) && $row_nfo["SeguridadSulfurico"] == '0') {
    $SeguridadSulfuricoSi = "";
    $SeguridadSulfuricoNo = "checked";
    $d_SeguridadSulfurico = "";
} else {
    $SeguridadSulfuricoSi = "";
    $SeguridadSulfuricoNo = "";
    $d_SeguridadSulfurico = "";
}

if (isset($row_nfo["EquipoSulfurico"]) && $row_nfo["EquipoSulfurico"] == '1') {
    $EquipoSulfuricoSi = "checked";
    $EquipoSulfuricoNo = "";
    $CargueSWF098 = "show";
    $d_EquipoSulfurico = "readonly";
} else if (isset($row_nfo["EquipoSulfurico"]) && $row_nfo["EquipoSulfurico"] == '0') {
    $EquipoSulfuricoSi = "";
    $EquipoSulfuricoNo = "checked";
    $CargueSWF098 = "none";
    $d_EquipoSulfurico = "";
} else {
    $EquipoSulfuricoSi = "";
    $EquipoSulfuricoNo = "";
    $CargueSWF098 = "none";
    $d_EquipoSulfurico = "";
}

$query_etapas3 = $_form->get_formulario_etapas($id, 'sulfurico');
$row_etapas2 = $query_etapas3->fetch_assoc();

// Paso 7     41
if (isset($row_etapas2["HoraInicio"]) && $row_etapas2["HoraInicio"] != '') {
    $horainiciocargaswfo = $row_etapas2["HoraInicio"];
    $d_horainiciocargaswfo = "readonly";
} else {
    $horainiciocargaswfo = "";
    $d_horainiciocargaswfo = "";
}

if (isset($row_etapas2["HoraFin"]) && $row_etapas2["HoraFin"] != '') {
    $horafincargaswfo = $row_etapas2["HoraFin"];
    $d_horafincargaswfo = "readonly";
} else {
    $horafincargaswfo = "";
    $d_horafincargaswfo = "";
}

if (isset($row_nfo["CierreControlOlores"]) && $row_nfo["CierreControlOlores"] == '1') {
    $CierreControlOlores = "checked";
    $d_CierreControlOlores = "readonly";
} else {
    $CierreControlOlores = "";
    $d_CierreControlOlores = "";
}

$query_etapas4 = $_form->get_formulario_etapas($id, 'sulfurico1');
$row_etapas4 = $query_etapas4->fetch_assoc();

if (isset($row_etapas4["HoraInicio"]) && $row_etapas4["HoraInicio"] != '') {
    $horainiciocargaswfo2 = $row_etapas4["HoraInicio"];
    $d_horainiciocargaswfo2 = "readonly";
} else {
    $horainiciocargaswfo2 = "";
    $d_horainiciocargaswfo2 = "";
}

if (isset($row_etapas4["HoraFin"]) && $row_etapas4["HoraFin"] != '') {
    $horafincargaswfo2 = $row_etapas4["HoraFin"];
    $d_horafincargaswfo2 = "readonly";
} else {
    $horafincargaswfo2 = "";
    $d_horafincargaswfo2 = "";
}

if (isset($row_etapas4["Temperatura"]) && $row_etapas4["Temperatura"] != '') {
    $tempswfo1 = $row_etapas4["Temperatura"];
    $d_tempswfo1 = "readonly";
} else {
    $tempswfo1 = "";
    $d_tempswfo1 = "";
}

if (isset($row_etapas4["Presion"]) && $row_etapas4["Presion"] != '') {
    $presionswfo1 = $row_etapas4["Presion"];
    $d_presionswfo1 = "readonly";
} else {
    $presionswfo1 = "";
    $d_presionswfo1 = "";
}


if (isset($row_nfo["Vapor"]) && $row_nfo["Vapor"] == '0') {
    $VaporSi = "checked";
    $VaporNo = "";
    $d_Vapor = "readonly";
} else if (isset($row_nfo["Vapor"]) && $row_nfo["Vapor"] == '1') {
    $VaporSi = "";
    $VaporNo = "checked";
    $d_Vapor = "";
} else {
    $VaporSi = "";
    $VaporNo = "";
    $d_Vapor = "";
}

$query_etapas5 = $_form->get_formulario_etapas($id, 'sostener1');
$row_etapas5 = $query_etapas5->fetch_assoc();

if (isset($row_etapas5["HoraInicio"]) && $row_etapas5["HoraInicio"] != '') {
    $horainiciosostenertemp = $row_etapas5["HoraInicio"];
    $d_horainiciosostenertemp = "readonly";
} else {
    $horainiciosostenertemp = "";
    $d_horainiciosostenertemp = "";
}

if (isset($row_etapas5["Temperatura"]) && $row_etapas5["Temperatura"] != '') {
    $temphr1 = $row_etapas5["Temperatura"];
    $d_temphr1 = "readonly";
} else {
    $temphr1 = "";
    $d_temphr1 = "";
}

if (isset($row_etapas5["Presion"]) && $row_etapas5["Presion"] != '') {
    $presionhr1 = $row_etapas5["Presion"];
    $d_presionhr1 = "readonly";
} else {
    $presionhr1 = "";
    $d_presionhr1 = "";
}

$query_etapas6 = $_form->get_formulario_etapas($id, 'sostener2');
$row_etapas6 = $query_etapas6->fetch_assoc();

if (isset($row_etapas6["Temperatura"]) && $row_etapas6["Temperatura"] != '') {
    $temphr2 = $row_etapas6["Temperatura"];
    $d_temphr2 = "readonly";
} else {
    $temphr2 = "";
    $d_temphr2 = "";
}

if (isset($row_etapas6["Presion"]) && $row_etapas6["Presion"] != '') {
    $presionhr2 = $row_etapas6["Presion"];
    $d_presionhr2 = "readonly";
} else {
    $presionhr2 = "";
    $d_presionhr2 = "";
}

$query_etapas7 = $_form->get_formulario_etapas($id, 'sostener3');
$row_etapas7 = $query_etapas7->fetch_assoc();

if (isset($row_etapas7["Temperatura"]) && $row_etapas7["Temperatura"] != '') {
    $temphr3 = $row_etapas7["Temperatura"];
    $d_temphr3 = "readonly";
} else {
    $temphr3 = "";
    $d_temphr3 = "";
}

if (isset($row_etapas7["Presion"]) && $row_etapas7["Presion"] != '') {
    $presionhr3 = $row_etapas7["Presion"];
    $d_presionhr3 = "readonly";
} else {
    $presionhr3 = "";
    $d_presionhr3 = "";
}

if (isset($row_etapas7["HoraFin"]) && $row_etapas7["HoraFin"] != '') {
    $horafinsostenertemp = $row_etapas7["HoraFin"];
    $d_horafinsostenertemp = ""; //SE MODIFICA PARA HABILITAR SU EDICIÓN
} else {
    $horafinsostenertemp = "";
    $d_horafinsostenertemp = "";
}

if (isset($row_nfo["ProblemaSWFO"]) && $row_nfo["ProblemaSWFO"] == '1') {
    $ProblemaSWFOSi = "checked";
    $ProblemaSWFONo = "";
    $d_TextoProblemaSWFO = "show";
    $d_ProblemaSWFO = "readonly";
} else if (isset($row_nfo["ProblemaSWFO"]) && $row_nfo["ProblemaSWFO"] == '0') {
    $ProblemaSWFOSi = "";
    $ProblemaSWFONo = "checked";
    $d_TextoProblemaSWFO = "none";
    $d_ProblemaSWFO = "";
} else {
    $ProblemaSWFOSi = "";
    $ProblemaSWFONo = "";
    $d_TextoProblemaSWFO = "none";
    $d_ProblemaSWFO = "";
}

$TextoProblemaSWFO = isset($row["TextoProblemaSWFO"]) ? $row["TextoProblemaSWFO"] : '';

if (isset($row_nfo["EnfriarOk"]) && $row_nfo["EnfriarOk"] == '1') {
    $EnfriarOkSi = "checked";
    $EnfriarOkNo = "";
    $d_EnfriarOk = "readonly";
} else if (isset($row_nfo["EnfriarOk"]) && $row_nfo["EnfriarOk"] == '0') {
    $EnfriarOkSi = "";
    $EnfriarOkNo = "checked";
    $d_EnfriarOk = "";
} else {
    $EnfriarOkSi = "";
    $EnfriarOkNo = "";
    $d_EnfriarOk = "";
}

$query_etapas8 = $_form->get_formulario_etapas($id, 'enfriado1');
$row_etapas8 = $query_etapas8->fetch_assoc();
if (isset($row_etapas8["Temperatura"]) && $row_etapas8["Temperatura"] != '') {
    $tempenfriado = $row_etapas8["Temperatura"];
    $d_tempenfriado = "readonly";
} else {
    $tempenfriado = "";
    $d_tempenfriado = "";
}
if (isset($row_etapas8["Presion"]) && $row_etapas8["Presion"] != '') {
    $presionenfriado = $row_etapas8["Presion"];
    $d_presionenfriado = "readonly";
} else {
    $presionenfriado = "";
    $d_presionenfriado = "";
}

$query_etapas9 = $_form->get_formulario_etapas($id, 'enfriado2');
$row_etapas9 = $query_etapas9->fetch_assoc();
if (isset($row_etapas9["Temperatura"]) && $row_etapas9["Temperatura"] != '') {
    $tempadicionstw = $row_etapas9["Temperatura"];
    $d_tempadicionstw = "readonly";
} else {
    $tempadicionstw = "";
    $d_tempadicionstw = "";
}
if (isset($row_etapas9["Presion"]) && $row_etapas9["Presion"] != '') {
    $presionadicionstw = $row_etapas9["Presion"];
    $d_presionadicionstw = "readonly";
} else {
    $presionadicionstw = "";
    $d_presionadicionstw = "";
}

if (isset($row_nfo["EvacuarCamisa"]) && $row_nfo["EvacuarCamisa"] == '1') {
    $EvacuarCamisa = "checked";
    $d_EvacuarCamisa = "readonly";
} else {
    $EvacuarCamisa = "";
    $d_EvacuarCamisa = "";
}

if (isset($row_nfo["SuministroVapor"]) && $row_nfo["SuministroVapor"] == '1') {
    $SuministroVaporSi = "checked";
    $SuministroVaporNo = "";
    $d_SuministroVapor = "readonly";
} else if (isset($row_nfo["SuministroVapor"]) && $row_nfo["SuministroVapor"] == '0') {
    $SuministroVaporSi = "";
    $SuministroVaporNo = "checked";
    $d_SuministroVapor = "";
} else {
    $SuministroVaporSi = "";
    $SuministroVaporNo = "";
    $d_SuministroVapor = "";
}

if (isset($row_nfo["SeguridadFDO"]) && $row_nfo["SeguridadFDO"] == '1') {
    $SeguridadFDOSi = "checked";
    $SeguridadFDONo = "";
    $d_SeguridadFDO = "readonly";
} else if (isset($row_nfo["SeguridadFDO"]) && $row_nfo["SeguridadFDO"] == '0') {
    $SeguridadFDOSi = "";
    $SeguridadFDONo = "checked";
    $d_SeguridadFDO = "";
} else {
    $SeguridadFDOSi = "";
    $SeguridadFDONo = "";
    $d_SeguridadFDO = "";
}

if (isset($row_nfo["EquipoFDO"]) && $row_nfo["EquipoFDO"] == '1') {
    $EquipoFDOSi = "checked";
    $EquipoFDONo = "";
    $RevisoConexion = "show";
    $Carga700 = "show";
    $d_EquipoFDO = "readonly";
} else if (isset($row_nfo["EquipoFDO"]) && $row_nfo["EquipoFDO"] == '0') {
    $EquipoFDOSi = "";
    $EquipoFDONo = "checked";
    $RevisoConexion = "none";
    $Carga700 = "none";
    $d_EquipoFDO = "";
} else {
    $EquipoFDOSi = "";
    $EquipoFDONo = "";
    $RevisoConexion = "none";
    $Carga700 = "none";
    $d_EquipoFDO = "";
}

//  Paso 8      67
if (isset($row_nfo["LineaTierraOk"]) && $row_nfo["LineaTierraOk"] == '1') {
    $LineaTierraOk = "checked";
    $d_LineaTierraOk = "readonly";
    $autoFocus1 = '';
    $autoFocus2 = '';
    $autoFocus3 = '';
    $autoFocus4 = 'autofocus';
} else {
    $LineaTierraOk = "";
    $d_LineaTierraOk = "";
}

if (isset($row_nfo["BombaNeumaticaOk"]) && $row_nfo["BombaNeumaticaOk"] == '1') {
    $BombaNeumaticaOk = "checked";
    $d_BombaNeumaticaOk = "readonly";
} else {
    $BombaNeumaticaOk = "";
    $d_BombaNeumaticaOk = "";
}
if (isset($row_nfo["ConexionOk"]) && $row_nfo["ConexionOk"] == '1') {
    $ConexionOk = "checked";
    $d_ConexionOk = "readonly";
} else {
    $ConexionOk = "";
    $d_ConexionOk = "";
}
if (isset($row_nfo["MangueraOk"]) && $row_nfo["MangueraOk"] == '1') {
    $MangueraOk = "checked";
    $d_MangueraOk = "readonly";
} else {
    $MangueraOk = "";
    $d_MangueraOk = "";
}
if (isset($row_nfo["LineaCargaOk"]) && $row_nfo["LineaCargaOk"] == '1') {
    $LineaCargaOk = "checked";
    $d_LineaCargaOk = "readonly";
} else {
    $LineaCargaOk = "";
    $d_LineaCargaOk = "";
}
if (isset($row_nfo["ValvulasCerradas"]) && $row_nfo["ValvulasCerradas"] == '1') {
    $ValvulasCerradas = "checked";
    $d_ValvulasCerradas = "readonly";
} else {
    $ValvulasCerradas = "";
    $d_ValvulasCerradas = "";
}
if (isset($row_nfo["CapacidadTanque"]) && $row_nfo["CapacidadTanque"] == '1') {
    $CapacidadTanque = "checked";
    $d_CapacidadTanque = "readonly";
} else {
    $CapacidadTanque = "";
    $d_CapacidadTanque = "";
}

// Paso 9
$query_etapas10 = $_form->get_formulario_etapas($id, 'carga7001');
$row_etapas10 = $query_etapas10->fetch_assoc();
if (isset($row_etapas10["HoraInicio"]) && $row_etapas10["HoraInicio"] != '') {
    $horainicioadc = $row_etapas10["HoraInicio"];
    $d_horainicioadc = "readonly";
} else {
    $horainicioadc = "";
    $d_horainicioadc = "";
}

if (isset($row_etapas10["Temperatura"]) && $row_etapas10["Temperatura"] != '') {
    $tempadc1 = $row_etapas10["Temperatura"];
    $d_tempadc1 = "readonly";
} else {
    $tempadc1 = "";
    $d_tempadc1 = "";
}

if (isset($row_etapas10["Presion"]) && $row_etapas10["Presion"] != '') {
    $presionadc1 = $row_etapas10["Presion"];
    $d_presionadc1 = "readonly";
} else {
    $presionadc1 = "";
    $d_presionadc1 = "";
}

if (isset($row_etapas10["Comentario"]) && $row_etapas10["Comentario"] != '') {
    $comentarioadc1 = $row_etapas10["Comentario"];
    $d_comentarioadc1 = "readonly";
} else {
    $comentarioadc1 = "";
    $d_comentarioadc1 = "";
}


$query_etapas11 = $_form->get_formulario_etapas($id, 'carga7002');
$row_etapas11 = $query_etapas11->fetch_assoc();
if (isset($row_etapas11["Temperatura"]) && $row_etapas11["Temperatura"] != '') {
    $tempadc2 = $row_etapas11["Temperatura"];
    $d_tempadc2 = "readonly";
} else {
    $tempadc2 = "";
    $d_tempadc2 = "";
}

if (isset($row_etapas11["Presion"]) && $row_etapas11["Presion"] != '') {
    $presionadc2 = $row_etapas11["Presion"];
    $d_presionadc2 = "readonly";
} else {
    $presionadc2 = "";
    $d_presionadc2 = "";
}

if (isset($row_etapas11["Comentario"]) && $row_etapas11["Comentario"] != '') {
    $comentarioadc2 = $row_etapas11["Comentario"];
    $d_comentarioadc2 = "readonly";
} else {
    $comentarioadc2 = "";
    $d_comentarioadc2 = "";
}


$query_etapas12 = $_form->get_formulario_etapas($id, 'carga7003');
$row_etapas12 = $query_etapas12->fetch_assoc();
if (isset($row_etapas12["Temperatura"]) && $row_etapas12["Temperatura"] != '') {
    $tempadc3 = $row_etapas12["Temperatura"];
    $d_tempadc3 = "readonly";
} else {
    $tempadc3 = "";
    $d_tempadc3 = "";
}

if (isset($row_etapas12["Presion"]) && $row_etapas12["Presion"] != '') {
    $presionadc3 = $row_etapas12["Presion"];
    $d_presionadc3 = "readonly";
} else {
    $presionadc3 = "";
    $d_presionadc3 = "";
}

if (isset($row_etapas12["Comentario"]) && $row_etapas12["Comentario"] != '') {
    $comentarioadc3 = $row_etapas12["Comentario"];
    $d_comentarioadc3 = "readonly";
} else {
    $comentarioadc3 = "";
    $d_comentarioadc3 = "";
}


$query_etapas13 = $_form->get_formulario_etapas($id, 'carga7004');
$row_etapas13 = $query_etapas13->fetch_assoc();
if (isset($row_etapas13["Temperatura"]) && $row_etapas13["Temperatura"] != '') {
    $tempadc4 = $row_etapas13["Temperatura"];
    $d_tempadc4 = "readonly";
} else {
    $tempadc4 = "";
    $d_tempadc4 = "";
}

if (isset($row_etapas13["Presion"]) && $row_etapas13["Presion"] != '') {
    $presionadc4 = $row_etapas13["Presion"];
    $d_presionadc4 = "readonly";
} else {
    $presionadc4 = "";
    $d_presionadc4 = "";
}

if (isset($row_etapas13["Comentario"]) && $row_etapas13["Comentario"] != '') {
    $comentarioadc4 = $row_etapas13["Comentario"];
    $d_comentarioadc4 = "readonly";
} else {
    $comentarioadc4 = "";
    $d_comentarioadc4 = "";
}


$query_etapas14 = $_form->get_formulario_etapas($id, 'carga7005');
$row_etapas14 = $query_etapas14->fetch_assoc();
if (isset($row_etapas14["Temperatura"]) && $row_etapas14["Temperatura"] != '') {
    $tempadc5 = $row_etapas14["Temperatura"];
    $d_tempadc5 = "readonly";
} else {
    $tempadc5 = "";
    $d_tempadc5 = "";
}

if (isset($row_etapas14["Presion"]) && $row_etapas14["Presion"] != '') {
    $presionadc5 = $row_etapas14["Presion"];
    $d_presionadc5 = "readonly";
} else {
    $presionadc5 = "";
    $d_presionadc5 = "";
}

if (isset($row_etapas14["Comentario"]) && $row_etapas14["Comentario"] != '') {
    $comentarioadc5 = $row_etapas14["Comentario"];
    $d_comentarioadc5 = "readonly";
} else {
    $comentarioadc5 = "";
    $d_comentarioadc5 = "";
}

if (isset($row_etapas14["HoraFin"]) && $row_etapas14["HoraFin"] != '') {
    $horafinadc = $row_etapas14["HoraFin"];
    $d_horafinadc = "readonly";
} else {
    $horafinadc = "";
    $d_horafinadc = "";
}


$query_etapas15 = $_form->get_formulario_etapas($id, 'reaccion1');
$row_etapas15 = $query_etapas15->fetch_assoc();
if (isset($row_etapas15["HoraInicio"]) && $row_etapas15["HoraInicio"] != '') {
    $horainicioreac = $row_etapas15["HoraInicio"];
    $d_horainicioreac = "readonly";
    $autoFocus1 = '';
    $autoFocus2 = '';
    $autoFocus3 = '';
    $autoFocus4 = '';
    $autoFocus8 = 'autofocus';
} else {
    $horainicioreac = "";
    $d_horainicioreac = "";
}

if (isset($row_etapas15["Temperatura"]) && $row_etapas15["Temperatura"] != '') {
    $tempreac1 = $row_etapas15["Temperatura"];
    $d_tempreac1 = "readonly";
} else {
    $tempreac1 = "";
    $d_tempreac1 = "";
}

if (isset($row_etapas15["Presion"]) && $row_etapas15["Presion"] != '') {
    $presionreac1 = $row_etapas15["Presion"];
    $d_presionreac1 = "readonly";
} else {
    $presionreac1 = "";
    $d_presionreac1 = "";
}

if (isset($row_etapas15["Comentario"]) && $row_etapas15["Comentario"] != '') {
    $comentarioreac1 = $row_etapas15["Comentario"];
    $d_comentarioreac1 = "readonly";
} else {
    $comentarioreac1 = "";
    $d_comentarioreac1 = "";
}


$query_etapas16 = $_form->get_formulario_etapas($id, 'reaccion2');
$row_etapas16 = $query_etapas16->fetch_assoc();
if (isset($row_etapas16["Temperatura"]) && $row_etapas16["Temperatura"] != '') {
    $tempreac2 = $row_etapas16["Temperatura"];
    $d_tempreac2 = "readonly";
} else {
    $tempreac2 = "";
    $d_tempreac2 = "";
}

if (isset($row_etapas16["Presion"]) && $row_etapas16["Presion"] != '') {
    $presionreac2 = $row_etapas16["Presion"];
    $d_presionreac2 = "readonly";
} else {
    $presionreac2 = "";
    $d_presionreac2 = "";
}

if (isset($row_etapas16["Comentario"]) && $row_etapas16["Comentario"] != '') {
    $comentarioreac2 = $row_etapas16["Comentario"];
    $d_comentarioreac2 = "readonly";
} else {
    $comentarioreac2 = "";
    $d_comentarioreac2 = "";
}


$query_etapas17 = $_form->get_formulario_etapas($id, 'reaccion3');
$row_etapas17 = $query_etapas17->fetch_assoc();
if (isset($row_etapas17["Temperatura"]) && $row_etapas17["Temperatura"] != '') {
    $tempreac3 = $row_etapas17["Temperatura"];
    $d_tempreac3 = "readonly";
} else {
    $tempreac3 = "";
    $d_tempreac3 = "";
}

if (isset($row_etapas17["Presion"]) && $row_etapas17["Presion"] != '') {
    $presionreac3 = $row_etapas17["Presion"];
    $d_presionreac3 = "readonly";
} else {
    $presionreac3 = "";
    $d_presionreac3 = "";
}

if (isset($row_etapas17["Comentario"]) && $row_etapas17["Comentario"] != '') {
    $comentarioreac3 = $row_etapas17["Comentario"];
    $d_comentarioreac3 = "readonly";
} else {
    $comentarioreac3 = "";
    $d_comentarioreac3 = "";
}


$query_etapas18 = $_form->get_formulario_etapas($id, 'reaccion4');
$row_etapas18 = $query_etapas18->fetch_assoc();
if (isset($row_etapas18["Temperatura"]) && $row_etapas18["Temperatura"] != '') {
    $tempreac4 = $row_etapas18["Temperatura"];
    $d_tempreac4 = "readonly";
} else {
    $tempreac4 = "";
    $d_tempreac4 = "";
}

if (isset($row_etapas18["Presion"]) && $row_etapas18["Presion"] != '') {
    $presionreac4 = $row_etapas18["Presion"];
    $d_presionreac4 = "readonly";
} else {
    $presionreac4 = "";
    $d_presionreac4 = "";
}

if (isset($row_etapas18["Comentario"]) && $row_etapas18["Comentario"] != '') {
    $comentarioreac4 = $row_etapas18["Comentario"];
    $d_comentarioreac4 = "readonly";
} else {
    $comentarioreac4 = "";
    $d_comentarioreac4 = "";
}


$query_etapas19 = $_form->get_formulario_etapas($id, 'reaccion5');
$row_etapas19 = $query_etapas19->fetch_assoc();
if (isset($row_etapas19["Temperatura"]) && $row_etapas19["Temperatura"] != '') {
    $tempreac5 = $row_etapas19["Temperatura"];
    $d_tempreac5 = "readonly";
} else {
    $tempreac5 = "";
    $d_tempreac5 = "";
}

if (isset($row_etapas19["Presion"]) && $row_etapas19["Presion"] != '') {
    $presionreac5 = $row_etapas19["Presion"];
    $d_presionreac5 = "readonly";
} else {
    $presionreac5 = "";
    $d_presionreac5 = "";
}

if (isset($row_etapas19["Comentario"]) && $row_etapas19["Comentario"] != '') {
    $comentarioreac5 = $row_etapas19["Comentario"];
    $d_comentarioreac5 = "readonly";
} else {
    $comentarioreac5 = "";
    $d_comentarioreac5 = "";
}


$query_etapas20 = $_form->get_formulario_etapas($id, 'reaccion6');
$row_etapas20 = $query_etapas20->fetch_assoc();
if (isset($row_etapas20["Temperatura"]) && $row_etapas20["Temperatura"] != '') {
    $tempreac6 = $row_etapas20["Temperatura"];
    $d_tempreac6 = "readonly";
} else {
    $tempreac6 = "";
    $d_tempreac6 = "";
}

if (isset($row_etapas20["Presion"]) && $row_etapas20["Presion"] != '') {
    $presionreac6 = $row_etapas20["Presion"];
    $d_presionreac6 = "readonly";
} else {
    $presionreac6 = "";
    $d_presionreac6 = "";
}

if (isset($row_etapas20["Comentario"]) && $row_etapas20["Comentario"] != '') {
    $comentarioreac6 = $row_etapas20["Comentario"];
    $d_comentarioreac6 = "readonly";
} else {
    $comentarioreac6 = "";
    $d_comentarioreac6 = "";
}


$query_etapas21 = $_form->get_formulario_etapas($id, 'reaccion7');
$row_etapas21 = $query_etapas21->fetch_assoc();
if (isset($row_etapas21["Temperatura"]) && $row_etapas21["Temperatura"] != '') {
    $tempreac7 = $row_etapas21["Temperatura"];
    $d_tempreac7 = "readonly";
} else {
    $tempreac7 = "";
    $d_tempreac7 = "";
}

if (isset($row_etapas21["Presion"]) && $row_etapas21["Presion"] != '') {
    $presionreac7 = $row_etapas21["Presion"];
    $d_presionreac7 = "readonly";
} else {
    $presionreac7 = "";
    $d_presionreac7 = "";
}

if (isset($row_etapas21["Comentario"]) && $row_etapas21["Comentario"] != '') {
    $comentarioreac7 = $row_etapas21["Comentario"];
    $d_comentarioreac7 = "";
} else {
    $comentarioreac7 = "";
    $d_comentarioreac7 = "";
}

if (isset($row_etapas21["HoraFin"]) && $row_etapas21["HoraFin"] != '') {
    $horafinreac = $row_etapas21["HoraFin"];
    $d_horafinreac = "readonly";
} else {
    $horafinreac = "";
    $d_horafinreac = "";
}


if (isset($row_nfo["ProblemaCondensacion"]) && $row_nfo["ProblemaCondensacion"] == '1') {
    $ProblemaCondensacionSi = "checked";
    $ProblemaCondensacionNo = "";
    $ShowTextoProblemaCondensacion = "show";
    $AdicionarSTW = "none";
    $d_ProblemaCondensacion = "readonly";
} else if (isset($row_nfo["ProblemaCondensacion"]) && $row_nfo["ProblemaCondensacion"] == '0') {
    $ProblemaCondensacionSi = "";
    $ProblemaCondensacionNo = "checked";
    $ShowTextoProblemaCondensacion = "none";
    $AdicionarSTW = "show";
    $d_ProblemaCondensacion = "";
} else {
    $ProblemaCondensacionSi = "";
    $ProblemaCondensacionNo = "";
    $ShowTextoProblemaCondensacion = "none";
    $AdicionarSTW = "none";
    $d_ProblemaCondensacion = "";
}

if (isset($row_nfo["TextoProblemaCondensacion"]) && $row_nfo["TextoProblemaCondensacion"] != '') {
    $TextoProblemaCondensacion = $row_nfo["TextoProblemaCondensacion"];
    $d_TextoProblemaCondensacion = "readonly";
} else {
    $TextoProblemaCondensacion = "";
    $d_TextoProblemaCondensacion = "";
}


// Paso 10      114
$query_etapas22 = $_form->get_formulario_etapas($id, 'adicionarstw');
$row_etapas22 = $query_etapas22->fetch_assoc();
if (isset($row_etapas22["HoraInicio"]) && $row_etapas22["HoraInicio"] != '') {
    $horainicioadcstw2 = $row_etapas22["HoraInicio"];
    $d_horainicioadcstw2 = "readonly";
    $autoFocus1 = '';
    $autoFocus2 = '';
    $autoFocus3 = '';
    $autoFocus4 = '';
    $autoFocus8 = '';
    $autoFocus5 = 'autofocus';
} else {
    $horainicioadcstw2 = "";
    $d_horainicioadcstw2 = "";
}

if (isset($row_etapas22["Temperatura"]) && $row_etapas22["Temperatura"] != '') {
    $tempadcstw2 = $row_etapas22["Temperatura"];
    $d_tempadcstw2 = "readonly";
} else {
    $tempadcstw2 = "";
    $d_tempadcstw2 = "";
}

if (isset($row_etapas22["Presion"]) && $row_etapas22["Presion"] != '') {
    $presionadcstw2 = $row_etapas22["Presion"];
    $d_presionadcstw2 = "readonly";
} else {
    $presionadcstw2 = "";
    $d_presionadcstw2 = "";
}

if (isset($row_etapas22["HoraFin"]) && $row_etapas22["HoraFin"] != '') {
    $horafinadcstw2 = $row_etapas22["HoraFin"];
    $d_horafinadcstw2 = "readonly";
} else {
    $horafinadcstw2 = "";
    $d_horafinadcstw2 = "";
}


if (isset($row_nfo["SeguridadCSO"]) && $row_nfo["SeguridadCSO"] == '1') {
    $SeguridadCSOSi = "checked";
    $SeguridadCSONo = "";
    $d_SeguridadCSO = "readonly";
} else if (isset($row_nfo["SeguridadCSO"]) && $row_nfo["SeguridadCSO"] == '0') {
    $SeguridadCSOSi = "";
    $SeguridadCSONo = "checked";
    $d_SeguridadCSO = "";
} else {
    $SeguridadCSOSi = "";
    $SeguridadCSONo = "";
    $d_SeguridadCSO = "";
}

if (isset($row_nfo["EquipoCSO"]) && $row_nfo["EquipoCSO"] == '1') {
    $EquipoCSOSi = "checked";
    $EquipoCSONo = "";
    $ReaccionNeutra = "show";
    $d_EquipoCSO = "readonly";
} else if (isset($row_nfo["EquipoCSO"]) && $row_nfo["EquipoCSO"] == '0') {
    $EquipoCSOSi = "";
    $EquipoCSONo = "checked";
    $ReaccionNeutra = "none";
    $d_EquipoCSO = "";
} else {
    $EquipoCSOSi = "";
    $EquipoCSONo = "";
    $ReaccionNeutra = "none";
    $d_EquipoCSO = "";
}

// Paso 11
$query_etapas23 = $_form->get_formulario_etapas($id, 'ReaccionNeutra1');
$row_etapas23 = $query_etapas23->fetch_assoc();
if (isset($row_etapas23["HoraInicio"]) && $row_etapas23["HoraInicio"] != '') {
    $horainicioneut = $row_etapas23["HoraInicio"];
    $d_horainicioneut = "readonly";
    $autoFocus1 = '';
    $autoFocus2 = '';
    $autoFocus3 = '';
    $autoFocus4 = '';
    $autoFocus8 = '';
    $autoFocus5 = '';
    $autoFocus6 = 'autofocus';
} else {
    $horainicioneut = "";
    $d_horainicioneut = "";
}

if (isset($row_etapas23["Temperatura"]) && $row_etapas23["Temperatura"] != '') {
    $tempneut1 = $row_etapas23["Temperatura"];
    $d_tempneut1 = "readonly";
} else {
    $tempneut1 = "";
    $d_tempneut1 = "";
}

if (isset($row_etapas23["Presion"]) && $row_etapas23["Presion"] != '') {
    $presionneut1 = $row_etapas23["Presion"];
    $d_presionneut1 = "readonly";
} else {
    $presionneut1 = "";
    $d_presionneut1 = "";
}

if (isset($row_etapas23["Comentario"]) && $row_etapas23["Comentario"] != '') {
    $comentarioneut1 = $row_etapas23["Comentario"];
    $d_comentarioneut1 = "readonly";
} else {
    $comentarioneut1 = "";
    $d_comentarioneut1 = "";
}


$query_etapas24 = $_form->get_formulario_etapas($id, 'ReaccionNeutra2');
$row_etapas24 = $query_etapas24->fetch_assoc();
if (isset($row_etapas24["Temperatura"]) && $row_etapas24["Temperatura"] != '') {
    $tempneut2 = $row_etapas24["Temperatura"];
    $d_tempneut2 = "readonly";
} else {
    $tempneut2 = "";
    $d_tempneut2 = "";
}

if (isset($row_etapas24["Presion"]) && $row_etapas24["Presion"] != '') {
    $presionneut2 = $row_etapas24["Presion"];
    $d_presionneut2 = "readonly";
} else {
    $presionneut2 = "";
    $d_presionneut2 = "";
}

if (isset($row_etapas24["Comentario"]) && $row_etapas24["Comentario"] != '') {
    $comentarioneut2 = $row_etapas24["Comentario"];
    $d_comentarioneut2 = "readonly";
} else {
    $comentarioneut2 = "";
    $d_comentarioneut2 = "";
}


$query_etapas25 = $_form->get_formulario_etapas($id, 'ReaccionNeutra3');
$row_etapas25 = $query_etapas25->fetch_assoc();
if (isset($row_etapas25["Temperatura"]) && $row_etapas25["Temperatura"] != '') {
    $tempneut3 = $row_etapas25["Temperatura"];
    $d_tempneut3 = "readonly";
} else {
    $tempneut3 = "";
    $d_tempneut3 = "";
}

if (isset($row_etapas25["Presion"]) && $row_etapas25["Presion"] != '') {
    $presionneut3 = $row_etapas25["Presion"];
    $d_presionneut3 = "readonly";
} else {
    $presionneut3 = "";
    $d_presionneut3 = "";
}

if (isset($row_etapas25["Comentario"]) && $row_etapas25["Comentario"] != '') {
    $comentarioneut3 = $row_etapas25["Comentario"];
    $d_comentarioneut3 = "readonly";
} else {
    $comentarioneut3 = "";
    $d_comentarioneut3 = "";
}


$query_etapas26 = $_form->get_formulario_etapas($id, 'ReaccionNeutra4');
$row_etapas26 = $query_etapas26->fetch_assoc();
if (isset($row_etapas26["Temperatura"]) && $row_etapas26["Temperatura"] != '') {
    $tempneut4 = $row_etapas26["Temperatura"];
    $d_tempneut4 = "readonly";
} else {
    $tempneut4 = "";
    $d_tempneut4 = "";
}

if (isset($row_etapas26["Presion"]) && $row_etapas26["Presion"] != '') {
    $presionneut4 = $row_etapas26["Presion"];
    $d_presionneut4 = "readonly";
} else {
    $presionneut4 = "";
    $d_presionneut4 = "";
}

if (isset($row_etapas26["Comentario"]) && $row_etapas26["Comentario"] != '') {
    $comentarioneut4 = $row_etapas26["Comentario"];
    $d_comentarioneut4 = "readonly";
} else {
    $comentarioneut4 = "";
    $d_comentarioneut4 = "";
}

if (isset($row_etapas26["HoraFin"]) && $row_etapas26["HoraFin"] != '') {
    $horafinneut = $row_etapas26["HoraFin"];
    $d_horafinneut = "readonly";
} else {
    $horafinneut = "";
    $d_horafinneut = "";
}


$query_etapas27 = $_form->get_formulario_etapas($id, 'homogenizacion');
$row_etapas27 = $query_etapas27->fetch_assoc();
if (isset($row_etapas27["HoraInicio"]) && $row_etapas27["HoraInicio"] != '') {
    $horainiciohomoge = $row_etapas27["HoraInicio"];
    $d_horainiciohomoge = "readonly";
} else {
    $horainiciohomoge = "";
    $d_horainiciohomoge = "";
}

if (isset($row_etapas27["Temperatura"]) && $row_etapas27["Temperatura"] != '') {
    $temphomoge1 = $row_etapas27["Temperatura"];
    $d_temphomoge1 = "readonly";
} else {
    $temphomoge1 = "";
    $d_temphomoge1 = "";
}

if (isset($row_etapas27["Presion"]) && $row_etapas27["Presion"] != '') {
    $presionhomoge1 = $row_etapas27["Presion"];
    $d_presionhomoge1 = "readonly";
} else {
    $presionhomoge1 = "";
    $d_presionhomoge1 = "";
}

if (isset($row_etapas27["Comentario"]) && $row_etapas27["Comentario"] != '') {
    $comentariohomoge1 = $row_etapas27["Comentario"];
    $d_comentariohomoge1 = "readonly";
} else {
    $comentariohomoge1 = "";
    $d_comentariohomoge1 = "";
}


$query_etapas28 = $_form->get_formulario_etapas($id, 'homogenizacion2');
$row_etapas28 = $query_etapas28->fetch_assoc();
if (isset($row_etapas28["Temperatura"]) && $row_etapas28["Temperatura"] != '') {
    $temphomoge2 = $row_etapas28["Temperatura"];
    $d_temphomoge2 = "readonly";
} else {
    $temphomoge2 = "";
    $d_temphomoge2 = "";
}

if (isset($row_etapas28["Presion"]) && $row_etapas28["Presion"] != '') {
    $presionhomoge2 = $row_etapas28["Presion"];
    $d_presionhomoge2 = "readonly";
} else {
    $presionhomoge2 = "";
    $d_presionhomoge2 = "";
}

if (isset($row_etapas28["Comentario"]) && $row_etapas28["Comentario"] != '') {
    $comentariohomoge2 = $row_etapas28["Comentario"];
    $d_comentariohomoge2 = "readonly";
} else {
    $comentariohomoge2 = "";
    $d_comentariohomoge2 = "";
}


$query_etapas29 = $_form->get_formulario_etapas($id, 'homogenizacion3');
$row_etapas29 = $query_etapas29->fetch_assoc();
if (isset($row_etapas29["Temperatura"]) && $row_etapas29["Temperatura"] != '') {
    $temphomoge3 = $row_etapas29["Temperatura"];
    $d_temphomoge3 = "readonly";
} else {
    $temphomoge3 = "";
    $d_temphomoge3 = "";
}

if (isset($row_etapas29["Presion"]) && $row_etapas29["Presion"] != '') {
    $presionhomoge3 = $row_etapas29["Presion"];
    $d_presionhomoge3 = "readonly";
} else {
    $presionhomoge3 = "";
    $d_presionhomoge3 = "";
}

if (isset($row_etapas29["HoraFin"]) && $row_etapas29["HoraFin"] != '') {
    $horafinhomoge = $row_etapas29["HoraFin"];
    $d_horafinhomoge = "readonly";
} else {
    $horafinhomoge = "";
    $d_horafinhomoge = "";
}

//INICIO QUERY OLOR FORMOL
$query_etapas30 = $_form->get_formulario_etapas($id, 'RevisionOlorFDO035_1');
$row_etapas30 = $query_etapas30->fetch_assoc();

if (isset($row_etapas30["HoraInicio"]) && $row_etapas30["HoraInicio"] != '') {
    $horaInicioFDO_1 = $row_etapas30["HoraFin"];
    $d_horaInicioFDO_1 = "readonly";
} else {
    $horaInicioFDO_1 = "";
    $d_horaInicioFDO_1 = "";
}

if (isset($row_etapas30["Temperatura"]) && $row_etapas30["Temperatura"] != '') {
    $temperaturaFDO_1 = $row_etapas30["Temperatura"];
    $d_temperaturaFDO_1 = "readonly";
} else {
    $temperaturaFDO_1 = "";
    $d_temperaturaFDO_1 = "";
}

if (isset($row_etapas30["Presion"]) && $row_etapas30["Presion"] != '') {
    $presionFDO_1 = $row_etapas30["Presion"];
    $d_presionFDO_1 = "readonly";
} else {
    $presionFDO_1 = "";
    $d_presionFDO_1 = "";
}

if (isset($row_etapas30["HoraFin"]) && $row_etapas30["HoraFin"] != '') {
    $horaFinFDO_1 = $row_etapas30["HoraFin"];
    $d_horaFinFDO_1 = "readonly";
} else {
    $horaFinFDO_1 = "";
    $d_horaFinFDO_1 = "";
}
//FIN QUERY OLOR FORMOL

//INICIO QUERY OLOR FORMOL
$query_etapas30 = $_form->get_formulario_etapas($id, 'RevisionOlorFDO035_2');
$row_etapas30 = $query_etapas30->fetch_assoc();

if (isset($row_etapas30["HoraInicio"]) && $row_etapas30["HoraInicio"] != '') {
    $horaInicioFDO_2 = $row_etapas30["HoraFin"];
    $d_horaInicioFDO_2 = "readonly";
} else {
    $horaInicioFDO_2 = "";
    $d_horaInicioFDO_2 = "";
}

if (isset($row_etapas30["Temperatura"]) && $row_etapas30["Temperatura"] != '') {
    $temperaturaFDO_2 = $row_etapas30["Temperatura"];
    $d_temperaturaFDO_2 = "readonly";
} else {
    $temperaturaFDO_2 = "";
    $d_temperaturaFDO_2 = "";
}

if (isset($row_etapas30["Presion"]) && $row_etapas30["Presion"] != '') {
    $presionFDO_2 = $row_etapas30["Presion"];
    $d_presionFDO_2 = "readonly";
} else {
    $presionFDO_2 = "";
    $d_presionFDO_2 = "";
}

if (isset($row_etapas30["HoraFin"]) && $row_etapas30["HoraFin"] != '') {
    $horaFinFDO_2 = $row_etapas30["HoraFin"];
    $d_horaFinFDO_2 = "readonly";
} else {
    $horaFinFDO_2 = "";
    $d_horaFinFDO_2 = "";
}
//FIN QUERY OLOR FORMOL


$ProcesoDescarga = "none";
$ProcesoDescargaFinal = "none";
if (isset($row_nfo["OlorFormol"]) && $row_nfo["OlorFormol"] == '1') {
    $OlorFormolSi = "checked";
    $OlorFormolNo = "";
    $RevisionOlorFDO035 = "show";
    //$Enfriet85        = "show";
    // $ProcesoDescarga  = "none";
    $d_OlorFormol = "readonly";
} else if (isset($row_nfo["OlorFormol"]) && $row_nfo["OlorFormol"] == '0') {
    $OlorFormolSi = "";
    $OlorFormolNo = "checked";
    $RevisionOlorFDO035 = "none";
    //$Enfriet85        = "none";
    // $ProcesoDescarga  = "show";
    $d_OlorFormol = "";
} else {
    $OlorFormolSi = "";
    $OlorFormolNo = "";
    $RevisionOlorFDO035 = "none";
    //$Enfriet85        = "none";
    // $ProcesoDescarga  = "none";
    $d_OlorFormol = "";
}

if (isset($row_nfo["OlorFormol2"]) && $row_nfo["OlorFormol2"] == '1') {
    $OlorFormolSi2 = "checked";
    $OlorFormolNo2 = "";
    $OlorFormolSigue = "show";
    $d_OlorFormol2 = "readonly";
} else if (isset($row_nfo["OlorFormol"]) && $row_nfo["OlorFormol"] == '0') {
    $OlorFormolSi2 = "";
    $OlorFormolNo2 = "checked";
    $OlorFormolSigue = "none";
    $d_OlorFormol2 = "";
} else {
    $OlorFormolSi2 = "";
    $OlorFormolNo2 = "";
    $OlorFormolSigue = "none";
    $d_OlorFormol2 = "";
}

$query_etapas24 = $_form->get_formulario_etapas($id, 'Enfriet85-');
$row_etapas24 = $query_etapas24->fetch_assoc();
if (isset($row_etapas24["Temperatura"]) && $row_etapas24["Temperatura"] != '') {
    $temp85 = $row_etapas24["Temperatura"];
    $d_temp85 = "readonly";
} else {
    $temp85 = "";
    $d_temp85 = "";
}

if (isset($row_etapas24["HoraInicio"]) && $row_etapas24["HoraInicio"] != '') {
    $horainiciostw85 = $row_etapas24["HoraInicio"];
    $d_horainiciostw85 = "readonly";
} else {
    $horainiciostw85 = "";
    $d_horainiciostw85 = "";
}

if (isset($row_etapas24["HoraFin"]) && $row_etapas24["HoraFin"] != '') {
    $horafinstw85 = $row_etapas24["HoraFin"];
    $d_horafinstw85 = "readonly";
} else {
    $horafinstw85 = "";
    $d_horafinstw85 = "";
}


if (isset($row["ph10"]) && $row["ph10"] != '') {
    $ph10 = $row["ph10"];
    $d_ph10 = "readonly";
} else {
    $ph10 = "";
    $d_ph10 = "";
}

if (isset($row["Csc050Ajuste"]) && $row["Csc050Ajuste"] != '') {
    $Csc050Ajuste = $row["Csc050Ajuste"];
    $d_Csc050Ajuste = "readonly";
} else {
    $Csc050Ajuste = "";
    $d_Csc050Ajuste = "";
}

if (isset($row["Stw00Ajuste"]) && $row["Stw00Ajuste"] != '') {
    $Stw00Ajuste = $row["Stw00Ajuste"];
    $d_Stw00Ajuste = "readonly";
} else {
    $Stw00Ajuste = "";
    $d_Stw00Ajuste = "";
}

if (isset($row["ph10Fin"]) && $row["ph10Fin"] != '') {
    $ph10Fin = $row["ph10Fin"];
    $d_ph10Fin = "readonly";
} else {
    $ph10Fin = "";
    $d_ph10Fin = "";
}

if (isset($row_nfo["ProductoBrillante"]) && $row_nfo["ProductoBrillante"] == '1') {
    $ProductoBrillanteSi = "checked";
    $ProductoBrillanteNo = "";
    $d_ProductoBrillante = "readonly";
    $FiltroLukas = "none";
    $ProcesoDescarga = "show";
} else if (isset($row_nfo["ProductoBrillante"]) && $row_nfo["ProductoBrillante"] == '0') {
    $ProductoBrillanteSi = "";
    $ProductoBrillanteNo = "checked";
    $d_ProductoBrillante = "";
    $FiltroLukas = "show";
    $ProcesoDescarga = "none";
} else {
    $ProductoBrillanteSi = "";
    $ProductoBrillanteNo = "";
    $d_ProductoBrillante = "";
    $FiltroLukas = "none";
    $ProcesoDescarga = "none";
}

if (isset($row["HoraInicioLukas"]) && $row["HoraInicioLukas"] != '') {
    $HoraInicioLukas = $row["HoraInicioLukas"];
    $d_HoraInicioLukas = "readonly";
} else {
    $HoraInicioLukas = "";
    $d_HoraInicioLukas = "";
}

if (isset($row["HoraFinLukas"]) && $row["HoraFinLukas"] != '') {
    $HoraFinLukas = $row["HoraFinLukas"];
    $d_HoraFinLukas = "readonly";
} else {
    $HoraFinLukas = "";
    $d_HoraFinLukas = "";
}


if (isset($row_nfo["ProductoBrillante"]) && $row_nfo["ProductoBrillante"] == '0') {
    if (isset($row_nfo["ProductoBrillante2"]) && $row_nfo["ProductoBrillante2"] == '1') {
        $ProductoBrillante2Si = "checked";
        $ProductoBrillante2No = "";
        $d_ProductoBrillante2 = "readonly";
    } else if (isset($row_nfo["ProductoBrillante2"]) && $row_nfo["ProductoBrillante2"] == '0') {
        $ProductoBrillante2Si = "";
        $ProductoBrillante2No = "checked";
        $d_ProductoBrillante2 = "";
    }
} else {
    $ProductoBrillante2Si = "";
    $ProductoBrillante2No = "";
    $d_ProductoBrillante2 = "";
}

if (isset($row_nfo["NotificarLaboratorio"]) && $row_nfo["NotificarLaboratorio"] != '') {
    $NotificarLaboratorio = $row_nfo["NotificarLaboratorio"];
    $d_NotificarLaboratorio = "readonly";
} else {
    $NotificarLaboratorio = "";
    $d_NotificarLaboratorio = "";
}

// ENVIAR PREVIA 1
if (isset($row_nfo["EnviarPrevia1"]) && $row_nfo["EnviarPrevia1"] == '1') {
    $EnviarPrevia1Si = "checked";
    $EnviarPrevia1No = "";
    $d_EnviarPrevia1 = "readonly";
    $ProcesoPrevia = "show";
} else if (isset($row_nfo["EnviarPrevia1"]) && $row_nfo["EnviarPrevia1"] == '0') {
    $EnviarPrevia1Si = "";
    $EnviarPrevia1No = "checked";
    $d_EnviarPrevia1 = "";
    $ProcesoPrevia = "none";
} else {
    $EnviarPrevia1Si = "";
    $EnviarPrevia1No = "";
    $d_EnviarPrevia1 = "";
    $ProcesoPrevia = "none";
}


//AUTORIZA DESCARGA
if (isset($row_nfo["AutorizaDescarga"]) && $row_nfo["AutorizaDescarga"] == '1') {
    $AutorizaDescargaSi = "checked";
    $AutorizaDescargaNo = "";
    $d_AutorizaDescarga = "readonly";
    $ProcesoDescargaFinal = "show";
} else if (isset($row_nfo["AutorizaDescarga"]) && $row_nfo["AutorizaDescarga"] == '0') {
    $AutorizaDescargaSi = "";
    $AutorizaDescargaNo = "checked";
    $d_AutorizaDescarga = "";
    $ProcesoDescargaFinal = "none";
} else {
    $AutorizaDescargaSi = "";
    $AutorizaDescargaNo = "";
    $d_AutorizaDescarga = "";
    $ProcesoDescargaFinal = "none";
}

$queryProcesos = $_form->get_formulario_procesos($id);
$rowProcesos = $queryProcesos->fetch_assoc();
if (isset($rowProcesos["HoraFinal"]) && $rowProcesos["HoraFinal"] != '') {
    $HoraFinal = $rowProcesos["HoraFinal"];
    $d_HoraFinal = "readonly";
} else {
    $HoraFinal = "";
    $d_HoraFinal = "";
}

// Paso 12
if (isset($row["SegNFO"]) && $row["SegNFO"] == '1') {
    $SegNFO = "checked";
    $d_SegNFO = "readonly";
    $autoFocus1 = '';
    $autoFocus2 = '';
    $autoFocus3 = '';
    $autoFocus4 = '';
    $autoFocus5 = '';
    $autoFocus6 = '';
    $autoFocus8 = '';
    $autoFocus7 = 'autofocus';
} else {
    $SegNFO = "";
    $d_SegNFO = "";
}

if (isset($row_nfo["EquipoNFO"]) && $row_nfo["EquipoNFO"] == '1') {
    $EquipoNFOSi = "checked";
    $EquipoNFONo = "";
    $SuspendioAgitacion = "show";
    $d_EquipoNFO = "readonly";
} else if (isset($row_nfo["EquipoNFO"]) && $row_nfo["EquipoNFO"] == '0') {
    $EquipoNFOSi = "";
    $EquipoNFONo = "checked";
    $SuspendioAgitacion = "none";
    $d_EquipoNFO = "";
} else {
    $EquipoNFOSi = "";
    $EquipoNFONo = "";
    $SuspendioAgitacion = "none";
    $d_EquipoNFO = "";
}

// Paso 13     160
if (isset($row["AgitacionOff"]) && $row["AgitacionOff"] == '1') {
    $AgitacionOff = "checked";
    $d_AgitacionOff = "readonly";
} else {
    $AgitacionOff = "";
    $d_AgitacionOff = "";
}
if (isset($row["TalegoDescarga"]) && $row["TalegoDescarga"] == '1') {
    $TalegoDescarga = "checked";
    $d_TalegoDescarga = "readonly";
} else {
    $TalegoDescarga = "";
    $d_TalegoDescarga = "";
}

// descripcionResiduo
if (isset($row["DescripcionResiduo"]) && $row["DescripcionResiduo"] != '') {
    $descripcionResiduo = $row["DescripcionResiduo"];
    $d_descripcionResiduo = "readonly";
} else {
    $descripcionResiduo = "";
    $d_descripcionResiduo = "";
}

// responsableDescarga
if (isset($row["ResponsableDescarga"]) && $row["ResponsableDescarga"] != '') {
    $responsableDescarga = $row["ResponsableDescarga"];
    $d_responsableDescarga = 'style = "display: none"';
    $d_responsableDescargaInput = 'style = "display: show"';
} else {
    $responsableDescarga = "";
    $d_responsableDescarga = "";
    $d_responsableDescarga = 'style = "display: show"';
    $d_responsableDescargaInput = 'style = "display: none"';
}

// basculaDescarga
if (isset($row["Bascula"]) && $row["Bascula"] != '') {
    $basculaDescarga = $row["Bascula"];
    $d_basculaDescarga = 'style = "display: none"';
    $d_basculaDescargaInput = 'style = "display: show"';
} else {
    $basculaDescarga = "";
    $d_basculaDescarga = 'style = "display: show"';
    $d_basculaDescargaInput = 'style = "display: none"';
}

// solicitantePrevia1
if (isset($row["SolicitantePrevia1"]) && $row["SolicitantePrevia1"] != '') {
    $solicitantePrevia1 = $row["SolicitantePrevia1"];
    $d_solicitantePrevia1 = 'style = "display: none"';
    $d_solicitantePreviaInput1 = 'style = "display: show"';
} else {
    $solicitantePrevia1 = "";
    $d_solicitantePrevia1 = 'style = "display: show"';
    $d_solicitantePreviaInput1 = 'style = "display: none"';
}

// AspectoPrevia1
if (isset($row["AspectoPrevia1"]) && $row["AspectoPrevia1"] != '') {
    $AspectoPrevia1 = $row["AspectoPrevia1"];
    $d_AspectoPrevia1 = 'style = "display: none"';
    $d_AspectoPreviaInput1 = 'style = "display: show"';
} else {
    $AspectoPrevia1 = "";
    $d_AspectoPrevia1 = 'style = "display: show"';
    $d_AspectoPreviaInput1 = 'style = "display: none"';
}

// SolidosPrevia1
if (isset($row["SolidosPrevia1"]) && $row["SolidosPrevia1"] != '') {
    $SolidosPrevia1 = $row["SolidosPrevia1"];
    $d_SolidosPrevia1 = "readonly";
} else {
    $SolidosPrevia1 = "";
    $d_SolidosPrevia1 = "";
}

// phPrevia1
if (isset($row["phPrevia1"]) && $row["phPrevia1"] != '') {
    $phPrevia1 = $row["phPrevia1"];
    $d_phPrevia1 = "readonly";
} else {
    $phPrevia1 = "";
    $d_phPrevia1 = "";
}

// SolubilidadPrevia1
if (isset($row["SolubilidadPrevia1"]) && $row["SolubilidadPrevia1"] != '') {
    $SolubilidadPrevia1 = $row["SolubilidadPrevia1"];
    $d_SolubilidadPrevia1 = 'style = "display: none"';
    $d_SolubilidadPreviaInput1 = 'style = "display: show"';
} else {
    $SolubilidadPrevia1 = "";
    $d_SolubilidadPrevia1 = 'style = "display: show"';
    $d_SolubilidadPreviaInput1 = 'style = "display: none"';
}

//AjustarPrevia1
if (isset($row["AjustarPrevia1"]) && $row["AjustarPrevia1"] == 1) {
    $AjustarPreviaVal1 = '1';
    $AjustarPrevia1 = "checked";
    $d_AjustarPrevia1 = "readonly";
    $Previa2 = 'style = "display: show"';
} else {
    $AjustarPreviaVal1 = '0';
    $AjustarPrevia1 = "";
    $d_AjustarPrevia1 = "";
    $Previa2 = 'style = "display: none"';
}

//PreviaConforme1
if (isset($row["PreviaConforme1"]) && $row["PreviaConforme1"] == 1) {
    $PreviaConformeVal1 = '1';
    $PreviaConforme1 = "checked";
    $d_PreviaConforme1 = "readonly";
} else {
    $PreviaConformeVal1 = '0';
    $PreviaConforme1 = "";
    $d_PreviaConforme1 = "";
}

//PreviaNoConforme1
if (isset($row["PreviaNoConforme1"]) && $row["PreviaNoConforme1"] == 1) {
    $PreviaNoConformeVal1 = '1';
    $PreviaNoConforme1 = "checked";
    $d_PreviaNoConforme1 = "readonly";
    $Previa2 = 'style = "display: show"';
} else {
    $PreviaNoConformeVal1 = '0';
    $PreviaNoConforme1 = "";
    $d_PreviaNoConforme1 = "";
    $Previa2 = 'style = "display: none"';
}

// HoraInicioPrevia1
if (isset($row["HoraInicioPrevia1"]) && $row["HoraInicioPrevia1"] != '') {
    $HoraInicioPrevia1 = $row["HoraInicioPrevia1"];
    $d_HoraInicioPrevia1 = "readonly";
} else {
    $HoraInicioPrevia1 = "";
    $d_HoraInicioPrevia1 = "";
}

// HoraFinPrevia1
if (isset($row["HoraFinPrevia1"]) && $row["HoraFinPrevia1"] != '') {
    $HoraFinPrevia1 = $row["HoraFinPrevia1"];
    $d_HoraFinPrevia1 = "readonly";
} else {
    $HoraFinPrevia1 = "";
    $d_HoraFinPrevia1 = "";
}

// PreviaAnalizadaPor1
if (isset($row["PreviaAnalizadaPor1"]) && $row["PreviaAnalizadaPor1"] != '') {
    $PreviaAnalizadaPor1 = $row["PreviaAnalizadaPor1"];
    $d_PreviaAnalizadaPor1 = 'style = "display: none"';
    $d_PreviaAnalizadaPorInput1 = 'style = "display: show"';
} else {
    $PreviaAnalizadaPor1 = "";
    $d_PreviaAnalizadaPor1 = 'style = "display: show"';
    $d_PreviaAnalizadaPorInput1 = 'style = "display: none"';
}

// PreviaAprobadaPor1
if (isset($row["PreviaAprobadaPor1"]) && $row["PreviaAprobadaPor1"] != '') {
    $PreviaAprobadaPor1 = $row["PreviaAnalizadaPor1"];
    $d_PreviaAprobadaPor1 = 'style = "display: none"';
    $d_PreviaAprobadaPorInput1 = 'style = "display: show"';
} else {
    $PreviaAprobadaPor1 = "";
    $d_PreviaAprobadaPor1 = 'style = "display: show"';
    $d_PreviaAprobadaPorInput1 = 'style = "display: none"';
}

// solicitantePrevia2
if (isset($row["SolicitantePrevia2"]) && $row["SolicitantePrevia2"] != '') {
    $solicitantePrevia2 = $row["SolicitantePrevia2"];
    $d_solicitantePrevia2 = 'style = "display: none"';
    $d_solicitantePreviaInput2 = 'style = "display: show"';
} else {
    $solicitantePrevia2 = "";
    $d_solicitantePrevia2 = 'style = "display: show"';
    $d_solicitantePreviaInput2 = 'style = "display: none"';
}

// AspectoPrevia2
if (isset($row["AspectoPrevia2"]) && $row["AspectoPrevia2"] != '') {
    $AspectoPrevia2 = $row["AspectoPrevia2"];
    $d_AspectoPrevia2 = 'style = "display: none"';
    $d_AspectoPreviaInput2 = 'style = "display: show"';
} else {
    $AspectoPrevia2 = "";
    $d_AspectoPrevia2 = 'style = "display: show"';
    $d_AspectoPreviaInput2 = 'style = "display: none"';
}

// SolidosPrevia2
if (isset($row["SolidosPrevia2"]) && $row["SolidosPrevia2"] != '') {
    $SolidosPrevia2 = $row["SolidosPrevia2"];
    $d_SolidosPrevia2 = "readonly";
} else {
    $SolidosPrevia2 = "";
    $d_SolidosPrevia2 = "";
}

// phPrevia2
if (isset($row["phPrevia2"]) && $row["phPrevia2"] != '') {
    $phPrevia2 = $row["phPrevia2"];
    $d_phPrevia2 = "readonly";
} else {
    $phPrevia2 = "";
    $d_phPrevia2 = "";
}

// SolubilidadPrevia2
if (isset($row["SolubilidadPrevia2"]) && $row["SolubilidadPrevia2"] != '') {
    $SolubilidadPrevia2 = $row["SolubilidadPrevia2"];
    $d_SolubilidadPrevia2 = 'style = "display: none"';
    $d_SolubilidadPreviaInput2 = 'style = "display: show"';
} else {
    $SolubilidadPrevia2 = "";
    $d_SolubilidadPrevia2 = 'style = "display: show"';
    $d_SolubilidadPreviaInput2 = 'style = "display: none"';
}

//AjustarPrevia2
if (isset($row["AjustarPrevia2"]) && $row["AjustarPrevia2"] == 1) {
    $AjustarPreviaVal2 = '1';
    $AjustarPrevia2 = "checked";
    $d_AjustarPrevia2 = "readonly";
} else {
    $AjustarPreviaVal2 = '0';
    $AjustarPrevia2 = "";
    $d_AjustarPrevia2 = "";
}

//PreviaConforme2
if (isset($row["PreviaConforme2"]) && $row["PreviaConforme2"] == 1) {
    $PreviaConformeVal2 = '1';
    $PreviaConforme2 = "checked";
    $d_PreviaConforme2 = "readonly";
} else {
    $PreviaConformeVal2 = '0';
    $PreviaConforme2 = "";
    $d_PreviaConforme2 = "";
}

//PreviaNoConforme2
if (isset($row["PreviaNoConforme2"]) && $row["PreviaNoConforme2"] == 1) {
    $PreviaNoConformeVal2 = '1';
    $PreviaNoConforme2 = "checked";
    $d_PreviaNoConforme2 = "readonly";
} else {
    $PreviaNoConformeVal2 = '0';
    $PreviaNoConforme2 = "";
    $d_PreviaNoConforme2 = "";
}

// HoraInicioPrevia2
if (isset($row["HoraInicioPrevia2"]) && $row["HoraInicioPrevia2"] != '') {
    $HoraInicioPrevia2 = $row["HoraInicioPrevia2"];
    $d_HoraInicioPrevia2 = "readonly";
} else {
    $HoraInicioPrevia2 = "";
    $d_HoraInicioPrevia2 = "";
}

// HoraFinPrevia2
if (isset($row["HoraFinPrevia2"]) && $row["HoraFinPrevia2"] != '') {
    $HoraFinPrevia2 = $row["HoraFinPrevia2"];
    $d_HoraFinPrevia2 = "readonly";
} else {
    $HoraFinPrevia2 = "";
    $d_HoraFinPrevia2 = "";
}

// PreviaAnalizadaPor2
if (isset($row["PreviaAnalizadaPor2"]) && $row["PreviaAnalizadaPor2"] != '') {
    $PreviaAnalizadaPor2 = $row["PreviaAnalizadaPor2"];
    $d_PreviaAnalizadaPor2 = 'style = "display: none"';
    $d_PreviaAnalizadaPorInput2 = 'style = "display: show"';
} else {
    $PreviaAnalizadaPor2 = "";
    $d_PreviaAnalizadaPor2 = 'style = "display: show"';
    $d_PreviaAnalizadaPorInput2 = 'style = "display: none"';
}

// PreviaAprobadaPor2
if (isset($row["PreviaAprobadaPor2"]) && $row["PreviaAprobadaPor2"] != '') {
    $PreviaAprobadaPor2 = $row["PreviaAnalizadaPor2"];
    $d_PreviaAprobadaPor2 = 'style = "display: none"';
    $d_PreviaAprobadaPorInput2 = 'style = "display: show"';
} else {
    $PreviaAprobadaPor2 = "";
    $d_PreviaAprobadaPor2 = 'style = "display: show"';
    $d_PreviaAprobadaPorInput2 = 'style = "display: none"';
}

$query_etapas25 = $_form->get_formulario_etapas($id, 'DescargaIbc');
$row_etapas25 = $query_etapas25->fetch_assoc();
if (isset($row_etapas25["HoraInicio"]) && $row_etapas25["HoraInicio"] != '') {
    $horainiciodescarga = $row_etapas25["HoraInicio"];
    $d_horainiciodescarga = "readonly";
} else {
    $horainiciodescarga = "";
    $d_horainiciodescarga = "";
}

if (isset($row_etapas25["HoraFin"]) && $row_etapas25["HoraFin"] != '') {
    $horafindescarga = $row_etapas25["HoraFin"];
    $d_horafindescarga = "readonly";
} else {
    $horafindescarga = "";
    $d_horafindescarga = "";
}


if (isset($row_nfo["ResiduoTalego"]) && $row_nfo["ResiduoTalego"] == '1') {
    $ResiduoTalegoSi = "checked";
    $ResiduoTalegoNo = "";
    $d_ResiduoTalego = "readonly";
} else if (isset($row_nfo["ResiduoTalego"]) && $row_nfo["ResiduoTalego"] == '0') {
    $ResiduoTalegoSi = "";
    $ResiduoTalegoNo = "checked";
    $d_ResiduoTalego = "";
} else {
    $ResiduoTalegoSi = "";
    $ResiduoTalegoNo = "";
    $d_ResiduoTalego = "";
}

if (isset($row["EnviarMuestraFinal"]) && $row["EnviarMuestraFinal"] == '1') {
    $EnviarMuestraFinal = "checked";
    $d_EnviarMuestraFinal = "readonly";
} else {
    $EnviarMuestraFinal = "";
    $d_EnviarMuestraFinal = "";
}

if (isset($row["Aspecto"])) {
    $Aspecto = $row["Aspecto"];
    $d_Aspecto = ""; //MODIFICADO PARA EDITABLE
} else {
    $Aspecto = "";
    $d_Aspecto = "";
}

if (isset($row["PorcentajeSolidos"])) {
    $PorcentajeSolidos = $row["PorcentajeSolidos"];
    $d_PorcentajeSolidos = ""; //MODIFICADO PARA EDITABLE
} else {
    $PorcentajeSolidos = "";
    $d_PorcentajeSolidos = "";
}

if (isset($row["pH10Final"])) {
    $pH10Final = $row["pH10Final"];
    $d_pH10Final = ""; //MODIFICADO PARA EDITABLE
} else {
    $pH10Final = "";
    $d_pH10Final = "";
}

if (isset($row["Solubilidad10"])) {
    $Solubilidad10 = $row["Solubilidad10"];
    $d_Solubilidad10 = ""; //MODIFICADO PARA EDITABLE
} else {
    $Solubilidad10 = "";
    $d_Solubilidad10 = "";
}

if (isset($row["Solubilidad40"])) {
    $Solubilidad40 = $row["Solubilidad40"];
    $d_Solubilidad40 = "";
} else {
    $Solubilidad40 = "";
    $d_Solubilidad40 = "";
}

if (isset($row["Rendimiento"]) && $row["Rendimiento"] != '') {
    $Rendimiento = $row["Rendimiento"];
    $d_Rendimiento = "readonly";
} else {
    $Rendimiento = "";
    $d_Rendimiento = "";
}

if (isset($row_nfo["ProcesoDif"]) && $row_nfo["ProcesoDif"] == '1') {
    $ProcesoDifSi = "checked";
    $ProcesoDifNo = "";
    $relavarReactor = "show";
    $d_ProcesoDif = "readonly";
} else if (isset($row_nfo["ProcesoDif"]) && $row_nfo["ProcesoDif"] == '0') {
    $ProcesoDifSi = "";
    $ProcesoDifNo = "checked";
    $relavarReactor = "none";
    $d_ProcesoDif = "";
} else {
    $ProcesoDifSi = "";
    $ProcesoDifNo = "";
    $relavarReactor = "none";
    $d_ProcesoDif = "";
}

$query_etapas26 = $_form->get_formulario_etapas($id, 'PasoFinal');
$row_etapas26 = $query_etapas26->fetch_assoc();
if (isset($row_etapas26["HoraInicio"]) && $row_etapas26["HoraInicio"] != '') {
    $horainiciolavado = $row_etapas26["HoraInicio"];
    $d_horainiciolavado = "readonly";
} else {
    $horainiciolavado = "";
    $d_horainiciolavado = "";
}
if (isset($row_etapas26["HoraFin"]) && $row_etapas26["HoraFin"] != '') {
    $horafinlavado = $row_etapas26["HoraFin"];
    $d_horafinlavado = "readonly";
} else {
    $horafinlavado = "";
    $d_horafinlavado = "";
}

if (isset($row["KgEnjuague"]) && $row["KgEnjuague"] != '') {
    $KgEnjuague = $row["KgEnjuague"];
    $d_KgEnjuague = "readonly";
} else {
    $KgEnjuague = "";
    $d_KgEnjuague = "";
}
if (isset($row["KgLavado"]) && $row["KgLavado"] != '') {
    $KgLavado = $row["KgLavado"];
    $d_KgLavado = "readonly";
} else {
    $KgLavado = "";
    $d_KgLavado = "";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ALTMANN - Modelando Conocimiento</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="css/normalize.css"> -->
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="shortcut icon" type="ico" href="favicon16x16.ico">
    
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <title>Document</title>
    <script>
        function valueChanged()
        {
            if($('#CapacidadTanque').is(":checked"))   
                $("#Carga700").show();
            else
                $("#Carga700").hide();
        }
    </script>
</head>

<body>
    <header class="site-header p-5">
        <div class="contenedor contenido-header">
            <div class="barra">

                <a href="/">
                <img src="../../img/colresin-altmann.PNG" alt="Logotipo Altmann">
                </a>

                <nav class="navegacion">
                    <a href="../inicio/index.php">Inicio</a>
                    <a href="../usuarios/usuarios.php" <?php echo $display; ?> >Usuarios</a>
                    <a href="../procesos/procesos.php">Procesos</a>
                    <a href="../login/cerrarSesion.php">Cerrar Sesión</a>
                </nav>
            </div>
        </div> <!-- Contenedor -->
    </header>
    <div class="container">
        <main>       
            <section id="formulario">
                
                <form id="formNfo" name="formNfo" method="POST" action="guardarFormulario.php">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="hidden" name="pasos" value="1">
                    <fieldset>
                        <center>
                        <!-- Paso 1 -->
                        <div class="container" id="seleccioneProceso">
                            <br><br>
                            <h1>PROCESO</h1>
                            <br>
                            <label>NFO</label>
                            <input type="text" id="nfo" name="nfo" value="<?php echo $nfo; ?>" disabled />

                            <legend>Proceso NFO</legend><br />

                            <label for="NumeroLote">Número de lote:</label>
                            <input type="text" size="2" id="NumeroLote" placeholder="Número de Lote" value="<?php echo $numeroLote; ?>" name="numeroLote" disabled />

                            <h4>Equipos a Utilizar</h4>
                            <table class="table">
                                <tr>
                                    <td style='width:35%;' align="center" >
                                        <label>DeDietrich 2</label>
                                        <input type="checkbox" id="Dietrich2" name="dietrich2" <?php echo $dietrich2 . ' ' . $d_dietrich2; ?>>
                                    </td>
                                    <td style='width:30%;' align="center" >
                                        <label>Filtro Lukas</label>
                                        <input type="checkbox" id="FLukas" name="fLukas" <?php echo $fLukas . ' ' . $d_fLukas; ?>>
                                    </td>
                                    <td style='width:35%;' align="center" >
                                        <label>Sistema de Control de Olor</label>
                                        <input type="checkbox" id="ContOlor" name="contOlor" <?php echo $contOlor . ' ' . $d_contOlor; ?>>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <br>
                        <hr> 

                        <div class="container">
                            <br><br>
                            <h1>FORMULACIÓN</h1>
                            <br>
                            <b> Indique la cantidad utilizada de cada materia prima y su lote</b><br/></br>
                            <!-- Formulario de Materia prima -->

                            <!--Se agrega el lote de materia prima-->
                
                            <div style="display: block;">
                                <h4 style="font-weight: bold;">MATERIA PRIMA NAN000</h4>
                                <br>
                                <div style="display: grid; grid-template-columns: 50% 50%">
                                    <div>
                                        <label for="lote_nan000">LOTE</label>
                                        <input type="text" id="lote_nan000" placeholder="Lote de Materia Prima"  name="lote_nan000"  height="50" width="200" value="<?php echo $lote_nan000; ?>" <?php echo $d_lote_nan000; ?> required />
                                    </div>
                                    <div>
                                        <label for="nan000">CANTIDAD</label>
                                        <input type="number" id="nan000" placeholder="Kg"  name="nan000"  height="50" width="200" value="<?php echo $nan000; ?>" <?php echo $d_nan000; ?> required />
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div style="display: block;">
                                <h4 style="font-weight: bold;">MATERIA PRIMA SWF098</h4>
                                <br>
                                <div style="display: grid; grid-template-columns: 50% 50%">
                                    <div>
                                        <label for="lote_swf098">LOTE</label>
                                        <input type="text" id="lote_swf098" placeholder="Lote de Materia Prima"  name="lote_swf098"  height="50" width="200" value="<?php echo $lote_swf098; ?>" <?php echo $d_lote_swf098; ?> required />
                                    </div>
                                    <div>
                                        <label for="swf098">CANTIDAD</label>
                                        <input type="number" id="swf098" placeholder="Kg"  name="swf098" value="<?php echo $swf098; ?>" <?php echo $d_swf098; ?> required />
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div style="display: block;">
                                <h4 style="font-weight: bold;">MATERIA PRIMA STW000</h4>
                                <br>
                                <div style="display: grid; grid-template-columns: 50% 50%">
                                    <div>
                                        <label for="lote_stw000">LOTE</label>
                                        <input type="text" id="lote_stw000" placeholder="Lote de Materia Prima"  name="lote_stw000"  height="50" width="200" value="<?php echo $lote_stw000; ?>" <?php echo $d_lote_stw000; ?> required />
                                    </div>
                                    <div>
                                        <label for="stw000">CANTIDAD</label>
                                        <input type="number" id="stw000" placeholder="Kg"  name="stw000" value="<?php echo $stw000; ?>" <?php echo $d_stw000; ?> required />
                                    </div>
                                </div>
                            </div>

                            <hr>
                            
                            <div style="display: block;">
                                <h4 style="font-weight: bold;">MATERIA PRIMA FDO037</h4>
                                <br>
                                <div style="display: grid; grid-template-columns: 50% 50%">
                                    <div>
                                        <label for="lote_fdo037">LOTE</label>
                                        <input type="text" id="lote_fdo037" placeholder="Lote de Materia Prima"  name="lote_fdo037"  height="50" width="200" value="<?php echo $lote_fdo037; ?>" <?php echo $d_lote_fdo037; ?> required />
                                    </div>
                                    <div>
                                        <label for="fdo037">CANTIDAD</label>
                                        <input type="number" id="fdo037" placeholder="Kg"  name="fdo037" value="<?php echo $fdo037; ?>" <?php echo $d_fdo037; ?> required />
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div style="display: block;">
                                <h4 style="font-weight: bold;">MATERIA PRIMA MYO000</h4>
                                <br>
                                <div style="display: grid; grid-template-columns: 50% 50%">
                                    <div>
                                        <label for="lote_myo000">LOTE</label>
                                        <input type="text" id="lote_myo000" placeholder="Lote de Materia Prima"  name="lote_myo000"  height="50" width="200" value="<?php echo $lote_myo000; ?>" <?php echo $d_lote_myo000; ?> required />
                                    </div>
                                    <div>
                                        <label for="myo000">CANTIDAD</label>
                                        <input type="number" id="myo000" placeholder="Kg"  name="myo000" value="<?php echo $myo000; ?>" <?php echo $d_myo000; ?> required />
                                    </div>
                                </div>
                            </div>

                            <hr>
                            
                            <div style="display: block;">
                                <h4 style="font-weight: bold;">MATERIA PRIMA STW000</h4>
                                <br>
                                <div style="display: grid; grid-template-columns: 50% 50%">
                                    <div>
                                        <label for="lote_stw0002">LOTE</label>
                                        <input type="text" id="lote_stw0002" placeholder="Lote de Materia Prima"  name="lote_stw0002"  height="50" width="200" value="<?php echo $lote_stw0002; ?>" <?php echo $d_lote_stw0002; ?> required />
                                    </div>
                                    <div>
                                        <label for="stw0002">CANTIDAD</label>
                                        <input type="number" id="stw0002" placeholder="Kg"  name="stw0002" value="<?php echo $stw0002; ?>" <?php echo $d_stw0002; ?> required />
                                    </div>
                                </div>
                            </div>

                            <hr>
                            
                            <div style="display: block;">
                                <h4 style="font-weight: bold;">MATERIA PRIMA CSC050</h4>
                                <br>
                                <div style="display: grid; grid-template-columns: 50% 50%">
                                    <div>
                                        <label for="lote_csc050">LOTE</label>
                                        <input type="text" id="lote_csc050" placeholder="Lote de Materia Prima"  name="lote_csc050"  height="50" width="200" value="<?php echo $lote_csc050; ?>" <?php echo $d_lote_csc050; ?> required />
                                    </div>
                                    <div>
                                        <label for="csc050">CANTIDAD</label>
                                        <input type="number" id="csc050" placeholder="Kg"  name="csc050" value="<?php echo $csc050; ?>" <?php echo $d_csc050; ?> required />
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div style="display: block;">
                                <h4 style="font-weight: bold;">MATERIA PRIMA STW000</h4>
                                <br>
                                <div style="display: grid; grid-template-columns: 50% 50%">
                                    <div>
                                        <label for="lote_stw0003">LOTE</label>
                                        <input type="text" id="lote_stw0003" placeholder="Lote de Materia Prima"  name="lote_stw0003"  height="50" width="200" value="<?php echo $lote_stw0003; ?>" <?php echo $d_lote_stw0003; ?> required />
                                    </div>
                                    <div>
                                        <label for="stw0003">CANTIDAD</label>
                                        <input type="number" id="stw0003" placeholder="Kg"  name="stw0003" value="<?php echo $stw0003; ?>" <?php echo $d_stw0003; ?> required /> 
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div style="display: block;">
                                <h4 style="font-weight: bold;">TOTAL DE MATERIAS PRIMAS USADAS</h4>
                                <br>
                                <div style="display: grid; grid-template-columns: 100%">
                                    <div>
                                        <label for="totalMP">TOTAL</label>
                                        <input style="width: 150px !important; text-align: center" type="text" id="totalMP" placeholder="Total de materias primas"  name="totalMP"  height="50" value="<?php echo $totalMP; ?>" <?php echo $d_totalMP; ?> required />
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        <hr>
                        <div class="container">
                            <br><br>
                            <h1>FORMULACIÓN ENTREGADA POR BODEGA</h1>
                            <br>
                            <p>¿ Todas las materias primas están correctamente separadas en cantidad (Kg) segun el FP-04 ?</p>
                            <table class="table" style="width:50%;">
                                <tr>
                                    <td align="center"><label>Si <input type="radio" id="MatPriFP04Si" name="MatPriFP04" value="1" <?php echo $MatPriFP04Si . ' ' . $d_MatPriFP04; ?> ></label></td>
                                    <td align="center"><label>No <input type="radio" id="MatPriFP04No" name="MatPriFP04" value="0" <?php echo $MatPriFP04No . ' ' . $d_MatPriFP04; ?>></label><br /></td>
                                </tr>
                            </table>
                            
                            <p>¿ Todas las materias primas están correctamente marcadas y ubicadas en la zona de separacion?</p>
                            <table class="table" style="width:50%;">
                                <tr>
                                    <td align="center"><label>Si <input type="radio" id="MatPriSeparadaSi" name="MatPriSeparada" value="1" <?php echo $MatPriSeparadaSi . ' ' . $d_MatPriSeparada; ?> ></label></td>
                                    <td align="center"><label>No <input type="radio" id="MatPriSeparadaNo" name="MatPriSeparada" value="0" <?php echo $MatPriSeparadaNo . ' ' . $d_MatPriSeparada; ?> ></label></td>
                                </tr>
                            </table>
                            <i>
                                <u>
                                    Si la respuesta es negativa a cualquiera de las preguntas anteriores,  notifiquelo al area de Bodega para hacer la correccion correspondiente.
                                </u>
                            </i>
                        </div>
                        <input type="submit" value="Guardar y Continuar" class="boton boton-opcion rounded-3">
                        <hr>
                </form>
                <form id="formNfo" name="formNfo" method="POST" action="guardarFormulario.php">
                        <!-- Paso 2 -->
                        <div class="container" id="CheckEquipo" style="display: <?php echo $displayMatPriSeparada; ?>;">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="hidden" name="pasos" value="2">
                            <br><br>
                            <h1>CHEQUEO DEL EQUIPO</h1>
                            <br>
                            <p>¿El reactor está completamente limpio?</p>
                            <table class="table" style="width:50%;">
                                <tr>
                                    <td align="center"><label>Si</label><input <?php echo $autoFocus1; ?> type="radio" id="ReactorLimpioSi" name="ReactorLimpio" value="1" <?php echo $ReactorLimpioSi . ' ' . $d_ReactorLimpio; ?>/></td>
                                    <td align="center"><label>No</label><input type="radio" id="ReactorLimpioNo" name="ReactorLimpio" value="0" <?php echo $ReactorLimpioNo . ' ' . $d_ReactorLimpio; ?>/></td>
                                </tr>
                            </table>
                            <i>Si la respuesta en negativa, realizar limpieza nuevamente.</i>
                            
                            <div class="container" id="limpiezaEquipo" style="display: <?php echo $displayReactorLimpio; ?>;">
                                <p>¿ Revisó la hermeticidad del reactor y líneas de traslado para evitar fugas de FDO035 y 700NAN000 sublimado?</p>
                                <table class="table" style="width:50%;">
                                    <tr>
                                        <td align="center"><label>Si<input type="radio" id="HermeticidadReactorSi" name="HermeticidadReactor" value="1" <?php echo $HermeticidadReactorSi . ' ' . $d_HermeticidadReactor; ?>/></label></td>
                                        <td align="center"><label>No<input type="radio" id="HermeticidadReactorNo" name="HermeticidadReactor" value="0" <?php echo $HermeticidadReactorNo . ' ' . $d_HermeticidadReactor; ?>/></label></td>
                                    </tr>
                                </table>    
                                    
                                <p>¿ Revisó que el reactor funcione correctamente ?</p>
                                <table class="table" style="width:50%;">
                                    <tr>
                                        <td align="center"><label>Si<input type="radio" id="ReactorFuncionaSi" name="ReactorFunciona" value="1" <?php echo $ReactorFuncionaSi . ' ' . $d_ReactorFunciona; ?>> </label></td>
                                        <td align="center"><label>No<input type="radio" id="ReactorFuncionaNo" name="ReactorFunciona" value="0" <?php echo $ReactorFuncionaNo . ' ' . $d_ReactorFunciona; ?>> </label></td>
                                    </tr>
                                </table> 
                                    
                                <p>¿ Funciona bien el sistema de vacío ?</p>
                                <table class="table" style="width:50%;">
                                    <tr>
                                        <td align="center"><label>Si<input type="radio" id="VacioFuncionaSi" name="VacioFunciona" value="1" <?php echo $VacioFuncionaSi . ' ' . $d_VacioFunciona; ?>> </label></td>
                                        <td align="center"><label>No<input type="radio" id="VacioFuncionaNo" name="VacioFunciona" value="0" <?php echo $VacioFuncionaNo . ' ' . $d_VacioFunciona; ?>> </label></td>
                                    </tr>
                                </table> 
                                    
                                <p>¿ Funciona bien el sistema de vapor ?</p>
                                <table class="table" style="width:50%;">
                                    <tr>
                                        <td align="center"><label>Si<input type="radio" id="VaporFuncionaSi" name="VaporFunciona" value="1" <?php echo $VaporFuncionaSi . ' ' . $d_VaporFunciona; ?>> </label></td>
                                        <td align="center"><label>No<input type="radio" id="VaporFuncionaNo" name="VaporFunciona" value="0" <?php echo $VaporFuncionaNo . ' ' . $d_VaporFunciona; ?>> </label></td>
                                    </tr>
                                </table> 
                                    
                                <p>¿ Funciona bien el sistema de enfriamiento ? </p>
                                <table class="table" style="width:50%;">
                                    <tr>
                                        <td align="center"><label>Si<input type="radio" id="EnfriamientoFuncionaSi" name="EnfriamientoFunciona" value="1" <?php echo $EnfriamientoFuncionaSi . ' ' . $d_EnfriamientoFunciona; ?>> </label></td>
                                        <td align="center"><label>No<input type="radio" id="EnfriamientoFuncionaNo" name="EnfriamientoFunciona" value="0" <?php echo $EnfriamientoFuncionaNo . ' ' . $d_EnfriamientoFunciona; ?>> </label></td>
                                    </tr>
                                </table> 
                                    
                                <p>¿ Funciona bien el sistema de emisiones (TANAN Y CSO050) ?</p>
                                <table class="table" style="width:50%;">
                                    <tr>
                                        <td align="center"><label>Si<input type="radio" id="EmisionesFuncionaSi" name="EmisionesFunciona" value="1" <?php echo $EmisionesFuncionaSi . ' ' . $d_EmisionesFunciona; ?>> </label></td>
                                        <td align="center"><label>No<input type="radio" id="EmisionesFuncionaNo" name="EmisionesFunciona" value="0" <?php echo $EmisionesFuncionaNo . ' ' . $d_EmisionesFunciona; ?>> </label></td>
                                    </tr>
                                </table> 
                                <i>Si la respuesta en negativa a cualquiera de las preguntas anteriores, notifique al area de mantenimiento para realizar las correspondientes mejoras o reparaciones.  Una vez realizadas continue con el proceso.</i>
                                
                                <div id="phsodatanque" style="display: <?php echo $displayEmisionesFunciona; ?>;">

                                    <p>¿ Reviso ph alcalino de la soda cáustica del tanque de emisiones ?</p>
                                    <table class="table" style="width:50%;">
                                        <tr>
                                            <td align="center"><label>Si<input type="radio" id="phsodatanqueSi" name="phsodatanque" value="1" <?php echo $phsodatanqueSi . ' ' . $d_phsodatanque; ?>> </label></td>
                                            <td align="center"><label>No<input type="radio" id="phsodatanqueNo" name="phsodatanque" value="0" <?php echo $phsodatanqueNo . ' ' . $d_phsodatanque; ?>> </label></td>
                                        </tr>
                                    </table> 
                                    
                                    <i>Si la respuesta en negativa, realizar cambio de la soda caustica para continuar con el proceso</i><br />
                                    
                                    <div id="CondensadorFunciona" style="display: <?php echo $displayCondensadorFunciona; ?>">
                                        <p>¿ El condensador funciona correctamente ?</p>
                                        <table class="table" style="width:50%;">
                                            <tr>
                                                <td align="center"><label>Si<input type="radio" id="CondensadorFuncionaSi" name="CondensadorFunciona" value="1" <?php echo $CondensadorFuncionaSi . ' ' . $d_CondensadorFunciona; ?>> </label></td>
                                                <td align="center"><label>No<input type="radio" id="CondensadorFuncionaNo" name="CondensadorFunciona" value="0" <?php echo $CondensadorFuncionaNo . ' ' . $d_CondensadorFunciona; ?>> </label></td>
                                            </tr>
                                        </table> 
                                    </div>
                                    
                                </div>
                                <hr>
                            </div>
                        </div>
                        <!-- Paso 3 -->
                        
                        <div class="container" id="checkEquipo2" style="display: <?php echo $displayCondensadorFunciona; ?>;">
                            <b>¿Aprueba Inicio del Proceso?</b><br />
                            <table class="table" style="width:50%;">
                                <tr>
                                    <td align="center"><label>Si <input type="radio" id="ApruebaInicioSi" name="ApruebaInicio" value="1" <?php echo $ApruebaInicioSi . ' ' . $d_ApruebaInicio; ?>> </label></td>
                                    <td align="center"><label>No <input type="radio" id="ApruebaInicioNo" name="ApruebaInicio" value="0" <?php echo $ApruebaInicioNo . ' ' . $d_ApruebaInicio; ?>> </label></td>
                                </tr>
                            </table>
                            <div style="display: <?php echo $displayRazonesNoAprob; ?>;">
                                <p>En caso de respuesta negativa, indique las razones (contacte a mantenimiento y dejar el proceso en espera hasta dar solucion):</p>
                                <input id="RazonesNoAprob" type="text" name="RazonesNoAprob" value="<?php echo $RazonesNoAprob; ?>" <?php echo $d_RazonesNoAprob; ?> />
                            </div>
                            <input type="submit" value="Guardar y Continuar" class="boton boton-opcion rounded-3">
                            <hr>
                            <br />
                        </div>
                    </form>
                    <form id="formNfo" name="formNfo" method="POST" action="guardarFormulario.php">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="hidden" name="pasos" value="3">
                        <!-- Paso 4 -->
                        <div class="container" id="InicioProceso" style="display: <?php echo $displayInicioProceso; ?>;">
                            <br><br>
                            <h1>INICIO DEL PROCESO</h1>
                            <br>
                            <h1>CARGA DEL NAN000</h1>
                            <br>

                            <b>¿Leyó la ficha y hoja de seguridad (FS-01y FS-01-1) para este producto?</b><br />
                            <a href="img/FDS Naftaleno tecnico.pdf" target="popup" onclick="window.open('img/FDS Naftaleno tecnico.pdf','popup','width=888,height=550'); return false;">
                                Ver Ficha de Seguridad
                            </a>
                            <br />
                            <table class="table" style="width:50%;">
                                <tr>
                                    <td align="center"><label>Si <input <?php echo $autoFocus2; ?> type="radio" id="SeguridadNaftalenoSi" name="SeguridadNaftaleno" value="1" <?php echo $SeguridadNaftalenoSi . ' ' . $d_SeguridadNaftaleno; ?>> </label></td>
                                    <td align="center"><label>No <input type="radio" id="SeguridadNaftalenoNo" name="SeguridadNaftaleno" value="0" <?php echo $SeguridadNaftalenoNo . ' ' . $d_SeguridadNaftaleno; ?>> </label></td>
                                </tr>
                            </table>
                            
                            <p style="color: red;"><i><u>CASO DE INCIDENTE CON 700NAN000 (Contacto con piel, ojos, inhalacion o derrame o incendio consulte la lista de contingencia)</i></u> </p>
                            <a href="img/ContingenciaNaftaleno.PNG" target="popup" onclick="window.open('img/ContingenciaNaftaleno.PNG','popup','width=883,height=260'); return false;"> Ver</a> <br />
                        </div>
                        <br />
                        
                        <!-- Paso 5 -->
                        <div class="container" id="EquipoSeguridad" style="display: <?php echo $EquipoSeguridad; ?>;">
                            <b>¿Cuenta con el equipo de seguridad adecuado para el manejo?</b>
                            <br />
                            <table class="table" style="width:50%;">
                                <tr>
                                    <td align="center"><label>Si <input type="radio" id="EquipoNaftalenoSi" name="EquipoNaftaleno" value="1" <?php echo $EquipoNaftalenoSi . ' ' . $d_EquipoNaftaleno; ?>> </label></td>
                                    <td align="center"><label>No <input type="radio" id="EquipoNaftalenoNo" name="EquipoNaftaleno" value="0" <?php echo $EquipoNaftalenoNo . ' ' . $d_EquipoNaftaleno; ?>> </label></td>
                                </tr>
                            </table>
                            
                            <br />
                            <i>En caso de respuesta negativa, contactar a Salud Ocupacional para reemplazo o entrega del EPP apropiado.</i> <br />
                        
                        </div>		
                        
                        <div class="container" id="TrituradoSaco" style="display: <?php echo $TrituradoSaco; ?>;">
                            
                            <label> <b>¿Cerró el sistema de enfriamiento del condensador (Válvula:<font color="#33ccff">Se-13</font>) para evitar obstrucción de las lineas con 700NAN000 sublimado?</b> 
                            <input type="checkbox" id="EnfriamientoCerrado" name="EnfriamientoCerrado" value="1" <?php echo $EnfriamientoCerrado; ?> <?php echo $d_EnfriamientoCerrado; ?> ></label>
                            <br />
    
                            <p style="color: red;"><i><u>NOTA: Para esta etapa el condensador y la torre debe estar sin enfriamiento, además SIN reflujo directo.</i></u></p>
                            <hr>
                            
                            
                            <div class="container" id="TrituradoSaco2" style="display: <?php echo $TrituradoSaco2; ?>;">
                                <input type="hidden" name="triturado" value="triturado">
                                <p>Con la valvula de principal abierta (<font color="#ff6600">P-49</font>) y la auxilar cerrada (<font color="#ff6600">P-49</font>), adicionar de 4 a 5 kilos de agua, para evitar obstrucciones en la descarga.</p>
                                <b>Cargue el (1)700NAN000, triturando si es necesario los sacos</b>
                                <br />
                                <label for="horainiciocarganaf">Hora de Inicio:</label>
                                <input type="time" id="horainiciocarganaf" name="horainiciocarganaf" value="<?php echo $horainiciocarganaf; ?>" <?php echo $d_horainiciocarganaf; ?>/>
                                <label for="horafincarganaf">Hora de Fin:</label>
                                <input type="time" id="horafincarganaf" name="horafincarganaf" value="<?php echo $horafincarganaf; ?>" <?php echo $d_horafincarganaf; ?>/>
                                <br />
                                <br />
                                <label> <b>Cierre válvulas (<font color="#ffcc00">VØ-23,VØ-24</font>)(<font color="#ff6600">P-28, P-29, P-30, P-31, P-32, P-33, P-35, P-36, P-37, P-38, P-44</font>) para bloquear el equipo</b> 
                                <input type="checkbox" id="ValvBloqueo" name="ValvBloqueo" value="1" <?php echo $ValvBloqueo; ?> <?php echo $d_ValvBloqueo; ?> /></label>
                                <br />
                                <label> <b>Abra el sistema de control de olores TANAN e inicie enfriamiento a su camisa.</b> 
                                <input type="checkbox" id="AbrirControlOlores" name="AbrirControlOlores" value="1" <?php echo $AbrirControlOlores; ?> <?php echo $d_AbrirControlOlores; ?> /></label>
                                <br />
                                <input type="hidden" name="fusion" value="fusion">
                                <b>Inicie Fusion del naftaleno presurizando la camisa del reactor máximo a 60 PSI hasta que la tempertura alcance T= 95-100°C. Válvulas: <font color="#b8b894">V-0, V-1 ,V-2, V-3, V-4, V-5</font> </b>             <br />
                                <label for="horainiciofusionnaf">Hora de Inicio:</label>
                                <input type="time" id="horainiciofusionnaf" name="horainiciofusionnaf" value="<?php echo $horainiciofusionnaf; ?>" <?php echo $d_horainiciofusionnaf; ?> /> 
                                <p style="color: red;"><i><u>IMPORTANTE: No sobrepasar esta temperatura, para evitar reacción violenta con (2)SWF098.</u></i></p>
                                <br />
                                
                                <label> <b>Dar estartazos inicialmente hasta que se pueda dejar encendido el agitador.</b> 
                                <input type="checkbox" id="Estartazos" name="Estartazos" value="1" <?php echo $Estartazos; ?> <?php echo $d_Estartazos; ?> /></label>
                                <br />
                                <label for="temp1">Temperatura: </label>
                                <input type="number" id="temp1" name="temp1" placeholder="°C" value="<?php echo $temp1; ?>" <?php echo $d_temp1; ?>/>
                                <label for="presion1">Presión de Vapor: </label>
                                <input type="number" id="presion1" name="presion1" placeholder="PSI" value="<?php echo $presion1; ?>" <?php echo $d_presion1; ?> />
                                <label for="horafinfusionnaf">Hora de Fin:</label>
                                <input type="time" id="horafinfusionnaf" name="horafinfusionnaf" value="<?php echo $horafinfusionnaf; ?>" <?php echo $d_horafinfusionnaf; ?> /> 
                                <br />

                                <b>¿ Cuando el 700NAN000 esta completamente fundido arrancó bien el agitador ?</b><br />
                                <table class="table" style="width:50%;">
                                    <tr>
                                        <td align="center"><label>Si <input type="radio" id="AgitadorOkSi" name="AgitadorOk" value="1" <?php echo $AgitadorOkSi . ' ' . $d_AgitadorOk; ?>/></label></td>
                                        <td align="center"><label>No <input type="radio" id="AgitadorOkNo" name="AgitadorOk" value="0" <?php echo $AgitadorOkNo . ' ' . $d_AgitadorOk; ?>/></label></td>
                                    </tr>
                                </table>
                                
                                <i>Si la respuesta en negativa, notifique al area de mantenimiento para realizar las correspondientes mejoras o reparaciones.  Una vez realizadas continue con el proceso.</i>
                                <br />
                                <b>¿ Se presento algún problema al cargar y fundir el naftaleno ?</b><br />
                                <table class="table" style="width:50%;">
                                    <tr>
                                        <td align="center"><label>Si <input type="radio" id="ProblemaFundSi" name="ProblemaFund" value="1" <?php echo $ProblemaFundSi . ' ' . $d_ProblemaFund; ?>/></label></td>
                                        <td align="center"><label>No <input type="radio" id="ProblemaFundNo" name="ProblemaFund" value="0" <?php echo $ProblemaFundNo . ' ' . $d_ProblemaFund; ?>/></label></td>
                                    </tr>
                                </table>
                                <!-- Agregar aquí casilla de comentarios -->
                                <div class="container" id="AfirmativaRespuesta" style="display: <?php echo $AfirmativaRespuesta; ?>">
                                    <i>Si la respuesta es afirmativa, mencione lo ocurrido y notifique al area encargada para dar solución.</i>
                                    <input type="text" name="ProblemaFundirNaf" value="<?php echo $ProblemaFundirNaf; ?>" <?php echo $d_ProblemaFundirNaf; ?>>
                                    <hr>
                                </div>
                                <hr>
                                <input type="submit" value="Guardar y Continuar" class="boton boton-opcion rounded-3">
                                </div>
                        </div>
                </form>
                <form id="formNfo" name="formNfo" method="POST" action="guardarFormulario.php">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="hidden" name="pasos" value="4">
                        <!-- Paso 6 -->
                        <div class="container" id="Carga710" style="display: <?php echo $Carga710; ?>;">
                            <hr>
                            <br><br>
                            <h1>CARGA DEL 710SWF098</h1>
                            <br>
                            <b>¿Leyó la ficha y hoja de seguridad (FS-01y FS-01-1) para este producto?</b><br />
                            <a href="img/FDS Acido Sulfúrico.pdf" target="popup" onclick="window.open('img/FDS Acido Sulfúrico.pdf','popup','width=889,height=550'); return false;">Ver Ficha de Seguridad</a><br />
                            <table class="table" style="width:50%;">
                                <tr>
                                    <td align="center"><label>Si <input <?php echo $autoFocus3; ?> type="radio" id="SeguridadSulfuricoSi" name="SeguridadSulfurico" value="1" <?php echo $SeguridadSulfuricoSi . ' ' . $d_SeguridadSulfurico; ?>/> </label></td>
                                    <td align="center"><label>No <input type="radio" id="SeguridadSulfuricoNo" name="SeguridadSulfurico" value="0" <?php echo $SeguridadSulfuricoNo . ' ' . $d_SeguridadSulfurico; ?>/> </label></td>
                                </tr>
                            </table>
                            <p style="color: red;"><i><u>EN CASO DE INCIDENTE CON 710SWF098 (Contacto con piel, ojos, inhalacion o derrame o incendio consulte la lista de contingencia</u></i> </p>
                            <a href="img/ContingenciaSulfurico.PNG" target="popup" onclick="window.open('img/ContingenciaSulfurico.PNG','popup','width=881,height=347'); return false;">Ver</a> <br />
                            <b>¿Cuenta con el equipo de seguridad adecuado para el manejo?</b>
                            <br />
                            <table class="table" style="width:50%;">
                                <tr>
                                    <td align="center"><label>Si <input type="radio" id="EquipoSulfuricoSi" name="EquipoSulfurico" value="1" <?php echo $EquipoSulfuricoSi . ' ' . $d_EquipoSulfurico; ?>/></label></td>
                                    <td align="center"><label>No <input type="radio" id="EquipoSulfuricoNo" name="EquipoSulfurico" value="0" <?php echo $EquipoSulfuricoNo . ' ' . $d_EquipoSulfurico; ?>/></label></td>
                                </tr>
                            </table>
                            <i>En caso de respuesta negativa, contactar a Salud Ocupacional para reemplazo o entrega del EPP apropiado.</i><br />
                        </div>

                        <!-- Paso 7 -->
                        <div class="container" id="CargueSWF098" style="display: <?php echo $CargueSWF098; ?>;">
                            <b>Cargue al tanque de adición (2) SWF098 garrafas) mediante vacío desde el 3 nivel del módulo.  Válvula: <font color="#ff6600">P-25</font></b><br />
                            <input type="hidden" name="sulfurico" value="sulfurico">
                            <label for="horainiciocargaswfo">Hora de Inicio:</label>
                            <input type="time" id="horainiciocargaswfo" name="horainiciocargaswfo" value="<?php echo $horafincargaswfo; ?>" <?php echo $d_horainiciocargaswfo; ?>/>
                            <label for="horafincargaswfo">Hora de Fin:</label>
                            <input type="time" id="horafincargaswfo" name="horafincargaswfo" value="<?php echo $horafincargaswfo; ?>" <?php echo $d_horafincargaswfo; ?>/>
                            <br />
                            <label> <b>Cierre sistema de control de olores TANAN. Válvulas: <font color="#ff6600">P-44, P-65, P-66, P-69</font></b> 
                            <input type="checkbox" id="CierreControlOlores" name="CierreControlOlores" value="1" <?php echo $CierreControlOlores; ?> <?php echo $d_CierreControlOlores; ?>/></label>
                            <br />
                            <b>Sin cerrar vapor inicie adición de (2) SWF098 al reactor en 30 minutos maximo. aproximadamente entre T = 98-100°C. Válvulas: <font color="#ff6600">P-25,P-26, P-27, P-28</font> </b><br />
                            <input type="hidden" name="sulfurico1" value="sulfurico1">
                            <label for="horainiciocargaswfo2">Hora de Inicio:</label>
                            <input type="time" id="horainiciocargaswfo2" name="horainiciocargaswfo2" value="<?php echo $horainiciocargaswfo2; ?>" <?php echo $d_horainiciocargaswfo2; ?> />
                            <label for="horafincargaswfo2">Hora de Fin:</label>
                            <input type="time" id="horafincargaswfo2" name="horafincargaswfo2" value="<?php echo $horainiciocargaswfo2; ?>" <?php echo $d_horafincargaswfo2; ?> />
                            <p style="color: red;"><i><u>Durante la adición se puede formar vacío dentro del equipo, controla. aprovechar elvacio para la adicion del acido sulfurico. <br> El sisteme de emisiones siempre debe estar abierto.</u></i></p>
                            <b>Verificar temperatura de reacción, si esta no sube por sí sola a T=150-155°C máximo, suministrar vapor para alcanzarla. </b><br />
                            <label for="tempswfo1">Temperatura: </label>
                            <input type="number" id="tempswfo1" placeholder="°C" name="tempswfo1" value="<?php echo $tempswfo1; ?>" <?php echo $d_tempswfo1; ?>/>
                            <label for="presionswfo1">Presión de Vapor: </label>
                            <input type="number" id="presionswfo1" name="presionswfo1" placeholder="PSI" value="<?php echo $presionswfo1; ?>" <?php echo $d_presionswfo1; ?>/> 
                            <b>Suministro Vapor</b><br />
                            <table class="table" style="width:50%;">
                                <tr>
                                    <td align="center"><label>Si <input type="radio" id="VaporSi" name="Vapor" value="1" <?php echo $VaporSi . ' ' . $d_Vapor; ?>/></label></td>
                                    <td align="center"><label>No <input type="radio" id="VaporNo" name="Vapor" value="0" <?php echo $VaporNo . ' ' . $d_Vapor; ?>/></label></td>
                                </tr>
                            </table>
                            <br />
                            <b>Con vapor sostener temperatura T = 155°C y reacción durante 3 horas.</b><br />
                            <label for="horainiciosostenertemp">Hora de Inicio:</label>
                            <input type="hidden" name="sostener1" value="sostener1">
                            <input type="time" id="horainiciosostenertemp" name="horainiciosostenertemp" value="<?php echo $horainiciosostenertemp; ?>" <?php echo $d_horainiciosostenertemp; ?>/>
                            <hr>
                            <br>
                            <h2 style="font-weight: bold !important;">SEGUIMIENTO DE LA REACCIÓN</h2>
                            <br>
                            <!-- Validar para que aparezcan los campos cuando se llenen -->
                            <b>Hora 1</b><br />
                            <label for="temphr1">Temperatura: </label>
                            <input type="number" id="temphr1" placeholder="°C" name="temphr1" value="<?php echo $temphr1; ?>" <?php echo $d_temphr1; ?>/>
                            <label for="presionhr1">Presión de Vapor:</label>
                            <input type="number" id="presionhr1" name="presionhr1" placeholder="PSI" value="<?php echo $presionhr1; ?>" <?php echo $d_presionhr1; ?>/><hr>
                            <b>Hora 2</b><br />
                            <input type="hidden" name="sostener2" value="sostener2">
                            <label for="temphr2">Temperatura: </label>
                            <input type="number" id="temphr2" placeholder="°C" name="temphr2" value="<?php echo $temphr2; ?>" <?php echo $d_temphr2; ?>/>
                            <label for="presionhr2">Presión de Vapor:</label>
                            <input type="number" id="presionhr2" name="presionhr2" placeholder="PSI" value="<?php echo $presionhr2; ?>" <?php echo $d_presionhr2; ?>/><hr>
                            <b>Hora 3</b><br />
                            <input type="hidden" name="sostener3" value="sostener3">
                            <label for="temphr3">Temperatura: </label>
                            <input type="number" id="temphr3" placeholder="°C" name="temphr3" value="<?php echo $temphr3; ?>" <?php echo $d_temphr3; ?>/>
                            <label for="presiohr3">Presión de Vapor: </label>
                            <input type="number" id="presionhr3" name="presionhr3" placeholder="PSI" value="<?php echo $presionhr3; ?>" <?php echo $d_presionhr3; ?>/><hr>
                            <label for="horafinsostenertemp">Hora de Fin:</label>
                            <input type="time" id="horafinsostenertemp" name="horafinsostenertemp" value="<?php echo $horafinsostenertemp; ?>" <?php echo $d_horafinsostenertemp; ?>/><hr>
                            <b>Cerrar vapor Si y solo Si ya se alcanzo la T =150°C y se haya finalizado la adicion</b><br>
                            <b>¿ Se presento algún problema al adicionar el ácido sulfúrico ?</b><br />
                            <table class="table" style="width:50%;">
                                <tr>
                                    <td align="center"><label>Si <input type="radio" id="ProblemaSWFOSi" name="ProblemaSWFO" value="1" <?php echo $ProblemaSWFOSi . ' ' . $d_ProblemaSWFO; ?>/> </label></td>
                                    <td align="center"><label>No <input type="radio" id="ProblemaSWFONo" name="ProblemaSWFO" value="0" <?php echo $ProblemaSWFONo . ' ' . $d_ProblemaSWFO; ?>/> </label></td>
                                </tr>
                            </table>
                            <br />
                            <!-- En caso de ser positiva validarlo -->
                            <div id='_TextoProblemaSWFO' style="display: <?php echo $_TextoProblemaSWFO; ?>">
                                <b>En caso de ser positiva la respuesta indique el problema presentado:</b>
                                <input type="text" size="2" id="TextoProblemaSWFO" name="TextoProblemaSWFO" value="<?php echo $TextoProblemaSWFO; ?>"> <br />
                            </div>
                            <b>Terminadas las 3 horas de reacción. Enfríe (Abrir válvula <font color="">Ee-9</font>) a T = 110°C,  con reflujo directo y restablezca el suministro de agua en el condensador. Válvula<font color="#33ccff">Se-13</font></b><br />
                            <input type="hidden" name="enfriado1" value="enfriado1">
                            <label for="tempenfriado">Temperatura: </label>
                            <input type="number" id="tempenfriado" name="tempenfriado" placeholder="°C" value="<?php echo $tempenfriado; ?>" <?php echo $d_tempenfriado; ?>/>
                            <label for="presionenfriado">Presión de Vapor: </label>
                            <input type="number" id="presionenfriado" name="presionenfriado" placeholder="PSI" value="<?php echo $presionenfriado; ?>" <?php echo $d_presionenfriado; ?>/> 
                            <b>En T = 110°C cerrar enfriamiento (Válvula <font color="">Ee-9</font>)</b>
                            <b>El producto debe ser negro, muy brillante como una brea.</b>

                            <hr>
                            <br><br>
                            <h1>CARGA DEL 700STW00</h1>
                            <br>
                            
                            <b>Adicione (3) STW000 en 1 hora como tiempo maximo (Válvulas: <font color="#ff6600">P-25,P-26,P-27,P-28</font>) con reflujo directo (Válvulas: <font color="#ff6600">P-31</font> ) (puede bajar  una temperatura T = 82°C, esta temperatura se consigue solo con la adicion de agua.)</b><br />
                            <input type="hidden" name="enfriado2" value="enfriado2">
                            <label for="tempadicionstw">Temperatura: </label>
                            <input type="number" id="tempadicionstw" name="tempadicionstw" placeholder="°C" value="<?php echo $tempadicionstw; ?>" <?php echo $d_tempadicionstw; ?>/>
                            <label for="presionadicionstw">Presión de Vapor: </label>
                            <input type="number" id="presionadicionstw" name="presionadicionstw" placeholder="PSI" value="<?php echo $presionadicionstw; ?>" <?php echo $d_presionadicionstw; ?>/>
                            <br />
                            
                            
                            <hr>
                            <br><br>
                            <h1>CARGA DEL 700FDO035 Y 710MYO000</h1>
                            <br>
                            <b>¿Leyó la ficha y hoja de seguridad (FS-01y FS-01-1) para estos productos?</b> <br />
                            <a href="img/FDS Formol al 37_.pdf" target="popup" onclick="window.open('img/FDS Formol al 37_.pdf','popup','width=861,height=550'); return false;">Ver Ficha de Seguridad Formol</a>
                            <a href="img/FDS Metanol.pdf" target="popup" onclick="window.open('img/FDS Metanol.pdf','popup','width=861,height=550'); return false;">Ver Ficha de Seguridad Metanol</a>
                            <br />
                            <table class="table" style="width:50%;">
                                <tr>
                                    <td align="center"><label>Si <input type="radio" id="SeguridadFDOSi" name="SeguridadFDO" value="1" <?php echo $SeguridadFDOSi . ' ' . $d_SeguridadFDO; ?>></label></td>
                                    <td align="center"><label>No <input type="radio" id="SeguridadFDONo" name="SeguridadFDO" value="0" <?php echo $SeguridadFDONo . ' ' . $d_SeguridadFDO; ?>></label><br /></td>
                                </tr>
                            </table>
                            <p style="color: red;"><i><u>EN CASO DE INCIDENTE CON 700FDO037 Y 710MYO000 (Contacto con piel, ojos, inhalacion o derrame o incendio consulte la lista de contingencia</u></i></p>
                            <a href="img/contingenciamezcla.PNG" target="popup" onclick="window.open('img/contingenciamezcla.PNG','popup','width=660,height=655'); return false;">Ver</a> <br />
                            <b>¿Cuenta con el equipo de seguridad adecuado para el manejo de ambos productos?</b><br />
                            <table class="table" style="width:50%;">
                                <tr>
                                    <td align="center"><label>Si <input type="radio" id="EquipoFDOSi" name="EquipoFDO" value="1" <?php echo $EquipoFDOSi . ' ' . $d_EquipoFDO; ?>></label></td>
                                    <td align="center"><label>No <input type="radio" id="EquipoFDONo" name="EquipoFDO" value="0" <?php echo $EquipoFDONo . ' ' . $d_EquipoFDO; ?>></label></td>
                                </tr>
                            </table>
                            <i>En caso de respuesta negativa, contactar a Salud Ocupacional para reemplazo o entrega del EPP apropiado.</i><br />
                            <input type="submit" value="Guardar y Continuar" class="boton boton-opcion rounded-3">
                        </div>
                    </form>
                    <form id="formNfo" name="formNfo" method="POST" action="guardarFormulario.php">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="hidden" name="pasos" value="5">
                        <!-- Paso 8 -->
                        <div class="container" id="RevisoConexion" style="display: <?php echo $RevisoConexion; ?>;">
                            <!-- todos deben validarse para mostrar el paso 9 -->
                            <label> <b>Reviso la conexión de línea a tierra en compañía de mantenimiento.</b> 
                            <input <?php echo $autoFocus4; ?> type="checkbox" id="LineaTierraOk" name="LineaTierraOk" value="1" <?php echo $LineaTierraOk; ?> <?php echo $d_LineaTierraOk; ?> /></label>
                            <label> <b>Para el bombeo del 710MYO000 Y 700FDO037 (Inflamables) lo hara con una bomba de vacio (usar bomba 1).</b> 
                            <input type="checkbox" id="BombaNeumaticaOk" name="BombaNeumaticaOk" value="1" <?php echo $BombaNeumaticaOk; ?> <?php echo $d_BombaNeumaticaOk; ?> /></label>
                            <label> <b>Los acoples de manguera y tubería estén bien hechas.</b> 
                            <input type="checkbox" id="ConexionOk" name="ConexionOk" value="1" <?php echo $ConexionOk; ?> <?php echo $d_ConexionOk; ?> /></label>
                            <label> <b>El tramo de manguera a usar en la carga se encuentra sin uniones, en buen estado y abrazaderas resistentes al bombeo</b> 
                            <input type="checkbox" id="MangueraOk" name="MangueraOk" value="1" <?php echo $MangueraOk; ?> <?php echo $d_MangueraOk; ?> /></label>
                            <label> <b>La línea de carga se encuentra sin escapes.</b> 
                            <input type="checkbox" id="LineaCargaOk" name="LineaCargaOk" value="1" <?php echo $LineaCargaOk; ?> <?php echo $d_LineaCargaOk; ?> /></label><br />
                            <label> <b>Las válvulas del tanque de adición al reactor estan cerradas para realizar carga.</b> 
                            <input type="checkbox" id="ValvulasCerradas" name="ValvulasCerradas" value="1" <?php echo $ValvulasCerradas; ?> <?php echo $d_ValvulasCerradas; ?> /></label>
                            <label> <b>Conoce la capacidad del tanque de adición para que no haya rebose al momento de la carga.</b> 
                            <input type="checkbox" id="CapacidadTanque" name="CapacidadTanque" value="1" <?php echo $CapacidadTanque; ?> <?php echo $d_CapacidadTanque; ?> onclick='valueChanged()' /></label>
                            <br />
                            <i>Capacidad del tanque de adición: 500 Litros</i>
                        </div>
                    
                        <!-- Paso 9 -->
                        <div class="container" id="Carga700" style="display: <?php echo $Carga700; ?>">
                            <hr>
                            <br><br>
                            <h1>INICIO DE CARGA DEL 700FDO035 Y 710MYO000</h1>
                            <br>
                        
                            <i><u>IMPORTANTE TENER EN CUENTA: En el cargue del FDO037 al tanque de adición, usar una barrera en el orificio de entrada al tambor o garrafa por donde entra la manguera o tubo, de manera que se evite la salida de los vapores del FDO037.  Así mismo se debe ubicar la persona que va a realizar el cargue en contra del viento para disminuir exposición.	</u></i>
                            <br />
                            <i><u>"Inicie la adicion Sin vapor de la mezcla  (4) FDO037 y  (5) MYO000 en T=90°C, Adicionar en 4 horas. Válvulas: <font color="#ff6600">P-25,P-26,P-27,P-28</font> <br> Durante el proximo seguimiento y durante la adicion de FDO037 / MYO000 l la temperatura subira gradualmente, si esto no se presenta ayudar con pase de vapor."</u></i><br />
                            <hr>
                            <br>
                            <h2 style="font-weight: bold !important;">SEGUIMIENTO DE LA ADICIÓN</h2>
                            <br>
                            <label for="horainicioadc">Hora de Inicio:</label>
                            <input type="hidden" name="carga7001" value="carga7001">
                            <input type="time" id="horainicioadc" name="horainicioadc" value="<?php echo $horainicioadc; ?>" <?php echo $d_horainicioadc; ?>  /><br />
                            <!-- Seguimiento por horas y que cuando 1 hora muestre la segunda -->
                            <b>Hora 1</b><br />
                            <label for="tempadc1">Temperatura: </label>
                            <input type="number" id="tempadc1" name="tempadc1" value="<?php echo $tempadc1; ?>" placeholder="°C" <?php echo $d_tempadc1; ?>  />
                            <label for="presionadc1">Presión de Vapor:</label>
                            <input type="number" id="presionadc1" name="presionadc1" placeholder="PSI" value="<?php echo $presionadc1; ?>" <?php echo $d_presionadc1; ?>  />
                            <b>Observaciones/Comentarios</b>
                            <input type="text" name="comentarioadc1" value="<?php echo $comentarioadc1; ?>" <?php echo $d_comentarioadc1; ?>  /><hr>
                            <b>Hora 2</b><br />
                            <input type="hidden" name="carga7002" value="carga7002">
                            <label for="tempadc2">Temperatura: </label>
                            <input type="number" id="tempadc2" name="tempadc2" value="<?php echo $tempadc2; ?>" placeholder="°C" <?php echo $d_tempadc2; ?>  />
                            <label for="presionadc2">Presión de Vapor:</label>
                            <input type="number" id="presionadc2" name="presionadc2" placeholder="PSI" value="<?php echo $presionadc2; ?>" <?php echo $d_presionadc2; ?>  />
                            <b>Observaciones/Comentarios</b>
                            <input type="text" name="comentarioadc2" value="<?php echo $comentarioadc2; ?>" <?php echo $d_comentarioadc2; ?>  /><hr>
                            <b>Hora 3</b><br />
                            <input type="hidden" name="carga7003" value="carga7003">
                            <label for="tempadc3">Temperatura: </label>
                            <input type="number" id="tempadc3" name="tempadc3" value="<?php echo $tempadc3; ?>" placeholder="°C" <?php echo $d_tempadc3; ?>  />
                            <label for="presionadc3">Presión de Vapor: </label>
                            <input type="number" id="presionadc3" name="presionadc3" placeholder="PSI" value="<?php echo $presionadc3; ?>" <?php echo $d_presionadc3; ?>  />
                            <b>Observaciones/Comentarios</b>
                            <input type="text" name="comentarioadc3" value="<?php echo $comentarioadc3; ?>" <?php echo $d_comentarioadc3; ?>  /><hr>
                            <b>Hora 4</b><br />
                            <input type="hidden" name="carga7004" value="carga7004">
                            <label for="tempadc4">Temperatura: </label>
                            <input type="number" id="tempadc4" name="tempadc4" value="<?php echo $tempadc4; ?>" placeholder="°C" <?php echo $d_tempadc4; ?>  />
                            <label for="presionadc4">Presión de Vapor:</label>
                            <input type="number" id="presionadc4" name="presionadc4" placeholder="PSI" value="<?php echo $presionadc4; ?>" <?php echo $d_presionadc4; ?>  />
                            <b>Observaciones/Comentarios</b>
                            <input type="text" name="comentarioadc4" value="<?php echo $comentarioadc4; ?>" <?php echo $d_comentarioadc4; ?>  /> <br>
                            <b>En caso de necesitar tiempo adicional, agregar los datos a continuación:</b>
                            <hr>
                            <b>Tiempo adicional</b><br />
                            <input type="hidden" name="carga7005" value="carga7005">
                            <label for="tempadc5">Temperatura: </label>
                            <input type="number" id="tempadc5" name="tempadc5" value="<?php echo $tempadc5; ?>" placeholder="°C" <?php echo $d_tempadc5; ?>  />
                            <label for="presionadc5">Presión de Vapor: </label>
                            <input type="number" id="presionadc5" name="presionadc5" placeholder="PSI" value="<?php echo $presionadc5; ?>" <?php echo $d_presionadc5; ?>  />
                            <b>Observaciones/Comentarios</b>
                            <input type="text" name="comentarioadc5" value="<?php echo $comentarioadc5; ?>" <?php echo $d_comentarioadc5; ?> />
                            <br />
                            <label for="horafinadc">Hora de Fin:</label>
                            <input type="time" id="horafinadc" name="horafinadc" value="<?php echo $horafinadc; ?>" <?php echo $d_horafinadc; ?> />
                            <input type="submit" value="Guardar y Continuar" class="boton boton-opcion rounded-3">
                            <hr>
                            <br />
                        </div>
                    </form>
                    <form id="formNfo" name="formNfo" method="POST" action="guardarFormulario.php">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="hidden" name="pasos" value="55">
                        <div class="container" id="RevisoConexion" style="display: <?php echo $RevisoConexion; ?>;">
                            <b>Sostener durante 7 horas a T = 100 - 102 °C. <i> <u>Si es necesario dar pase de vapor por poco tiempo para sostener la temperatura en el rango T = 100 - 102°C.</u></i></b>
                            <br><b>**El proceso debe presentar reflujo</b>
                            <br><b>**Si el proceso se nota cafe claro, se debe obligar a reflujar el subiendo temperatura, ademas de dar reaccion hasta que pase a negro o cafe oscuro (2 horas aprox).</b>

                            <br /><b><u>IMPORTANTE:</u> Cargar parte de (6)STW000 al tanque de adicion, como precaucion en caso que se observe alta viscosidad durante la reaccion de condensacion y asi evitar polimerizacion rapida del producto.  Si se presenta este caso adicionar y continuar hasta completar el tiempo de reacción.</b>  <hr>
                            <br>
                            <h2 style="font-weight: bold !important;">SEGUIMIENTO DE REACCIÓN DE ADICIÓN</h2>
                            <br>
                            <b>Hora de Inicio</b><br />
                            <label <?php echo $autoFocus8; ?> for="horainicioreac">Hora de Inicio:</label>
                            <input type="hidden" name="reaccion1" value="reaccion1">
                            <input type="time" id="horainicioreac" name="horainicioreac" value="<?php echo $horainicioreac; ?>" <?php echo $d_horainicioreac; ?>/>
                            <br />
                            <b>Hora 1</b><br />
                            <!-- Seguimiento por horas y que cuando 1 hora muestre la segunda -->
                            <label for="tempreac1">Temperatura: </label>
                            <input type="number" id="tempreac1" name="tempreac1" value="<?php echo $tempreac1; ?>"placeholder="°C" <?php echo $d_tempreac1; ?> />
                            <label for="presionreac1">Presión de Vapor:</label>
                            <input type="number" id="presionreac1" name="presionreac1" placeholder="PSI" value="<?php echo $presionreac1; ?>" <?php echo $d_presionreac1; ?>/>
                            <b>Observaciones/Comentarios</b>
                            <input type="text" name="comentarioreac1" value="<?php echo $comentarioreac1; ?>" <?php echo $d_comentarioreac1; ?>/><hr>
                            <b>Hora 2</b><br />
                            <input type="hidden" name="reaccion2" value="reaccion2">
                            <label for="tempreac2">Temperatura: </label>
                            <input type="number" id="tempreac2" name="tempreac2"  value="<?php echo $tempreac2; ?>"placeholder="°C" <?php echo $d_tempreac2; ?> />
                            <label for="presionreac2">Presión de Vapor:</label>
                            <input type="number" id="presionreac2" name="presionreac2" placeholder="PSI" value="<?php echo $presionreac2; ?>" <?php echo $d_presionreac2; ?>/>
                            <b>Observaciones/Comentarios</b>
                            <input type="text" name="comentarioreac2" value="<?php echo $comentarioreac2; ?>" <?php echo $d_comentarioreac2; ?>/><hr>
                            <b>Hora 3</b><br />
                            <input type="hidden" name="reaccion3" value="reaccion3">
                            <label for="tempreac3">Temperatura: </label>
                            <input type="number" id="tempreac3" name="tempreac3" value="<?php echo $tempreac3; ?>"placeholder="°C" <?php echo $d_tempreac3; ?> />
                            <label for="presionreac3">Presión de Vapor: </label>
                            <input type="number" id="presionreac3" name="presionreac3" placeholder="PSI" value="<?php echo $presionreac3; ?>" <?php echo $d_presionreac3; ?>/>
                            <b>Observaciones/Comentarios</b>
                            <input type="text" name="comentarioreac3" value="<?php echo $comentarioreac3; ?>" <?php echo $d_comentarioreac3; ?>/><hr>
                            <b>Hora 4</b><br />
                            <label for="tempreac4">Temperatura: </label>
                            <input type="hidden" name="reaccion4" value="reaccion4">
                            <input type="number" id="tempreac4" name="tempreac4" value="<?php echo $tempreac4; ?>" placeholder="°C" <?php echo $d_tempreac4; ?> />
                            <label for="presionreac4">Presión de Vapor:</label>
                            <input type="number" id="presionreac4" name="presionreac4" placeholder="PSI" value="<?php echo $presionreac4; ?>" <?php echo $d_presionreac4; ?>/>
                            <b>Observaciones/Comentarios</b>
                            <input type="text" name="comentarioreac4" value="<?php echo $comentarioreac4; ?>" <?php echo $d_comentarioreac4; ?>/><hr>
                            <b>Hora 5</b><br />
                            <label for="tempreac5">Temperatura: </label>
                            <input type="hidden" name="reaccion5" value="reaccion5">
                            <input type="number" id="tempreac5" name="tempreac5" value="<?php echo $tempreac5; ?>"placeholder="°C" <?php echo $d_tempreac5; ?> />
                            <label for="presionreac5">Presión de Vapor: </label>
                            <input type="number" id="presionreac5" name="presionreac5" placeholder="PSI" value="<?php echo $presionreac5; ?>" <?php echo $d_presionreac5; ?>/>
                            <b>Observaciones/Comentarios</b>
                            <input type="text" name="comentarioreac5" value="<?php echo $comentarioreac5; ?>" <?php echo $d_comentarioreac5; ?>/>
                            <br />
                            <b>Hora 6</b><br />
                            <input type="hidden" name="reaccion6" value="reaccion6">
                            <label for="tempreac6">Temperatura: </label>
                            <input type="number" id="tempreac6" name="tempreac6" value="<?php echo $tempreac6; ?>"placeholder="°C" <?php echo $d_tempreac6; ?> />
                            <label for="presionreac6">Presión de Vapor:</label>
                            <input type="number" id="presionreac6" name="presionreac6" placeholder="PSI" value="<?php echo $presionreac6; ?>" <?php echo $d_presionreac6; ?> />
                            <b>Observaciones/Comentarios</b>
                            <input type="text" name="comentarioreac6" value="<?php echo $comentarioreac6; ?>" <?php echo $d_comentarioreac6; ?> /><hr>
                            <b>Hora 7</b><br />
                            <input type="hidden" name="reaccion7" value="reaccion7">
                            <label for="tempreac7">Temperatura: </label>
                            <input type="number" id="tempreac7" name="tempreac7" value="<?php echo $tempreac7; ?>" placeholder="°C" <?php echo $d_tempreac7; ?>/>
                            <label for="presionreac7">Presión de Vapor: </label>
                            <input type="number" id="presionreac7" name="presionreac7" placeholder="PSI" value="<?php echo $presionreac7; ?>" <?php echo $d_presionreac7; ?>/>
                            <b>Observaciones/Comentarios</b>
                            <input type="text" name="comentarioreac7" value="<?php echo $comentarioreac7; ?>" <?php echo $d_comentarioreac7; ?>/><br />
                            <label for="horafinreac">Hora de Fin:</label>
                            <input type="time" id="horafinreac" name="horafinreac" value="<?php echo $horafinreac; ?>" <?php echo $d_horafinreac; ?>/><hr>
                            <b>¿ Se presento algún problema en el equipo en este punto de reacción ?</b><br />
                            <table class="table" style="width:50%;">
                                <tr>
                                    <td align="center"><label>Si <input type="radio" id="ProblemaCondensacionSi" name="ProblemaCondensacion" value="1" <?php echo $ProblemaCondensacionSi . ' ' . $d_ProblemaCondensacion; ?>> </label></td>
                                    <td align="center"><label>No <input type="radio" id="ProblemaCondensacionNo" name="ProblemaCondensacion" value="0" <?php echo $ProblemaCondensacionNo . ' ' . $d_ProblemaCondensacion; ?>> </label></td>
                                </tr>
                            </table>
                            <div  class="container" id="TextoProblemaCondensacion" style="display: <?php echo $ShowTextoProblemaCondensacion; ?>">
                                <b>¿Cuál? (Si la respuesta es afirmativa)</b>
                                <input type="text" name="TextoProblemaCondensacion" value="<?php echo $TextoProblemaCondensacion; ?>" <?php echo $d_TextoProblemaCondensacion; ?>><br />
                            </div>
                            <input type="submit" value="Guardar y Continuar" class="boton boton-opcion rounded-3">
                            <br />
                            <br />
                        </div>
                    </form>
                    <form id="formNfo" name="formNfo" method="POST" action="guardarFormulario.php">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="hidden" name="pasos" value="6">
                        <!-- Paso 10 -->
                        <div class="container" id="AdicionarSTW" style="display: <?php echo $AdicionarSTW; ?>;">
                            <b>Adicionar (6) STW000 en 20 minutos como tiempo máximo. Válvulas: <font color="#ff6600">P-25,P-26,P-27,P-28</font></b><br />
                            <input type="hidden" name="adicionarstw" value="adicionarstw" <?php echo $disabled; ?>>
                            <label for="horainicioadcstw2">Hora de Inicio:</label>
                            <input <?php echo $autoFocus5; ?> type="time" id="horainicioadcstw2" name="horainicioadcstw2" value="<?php echo $horainicioadcstw2; ?>" <?php echo $d_horainicioadcstw2; ?>/>
                            <label for="tempadcstw2">Temperatura: </label>
                            <input type="number" id="tempadcstw2" name="tempadcstw2" value="<?php echo $tempadcstw2; ?>" placeholder="°C" <?php echo $d_tempadcstw2; ?>/>
                            <label for="presionadcstw2">Presión de Vapor:</label>
                            <input type="number" id="presionadcstw2" name="presionadcstw2" placeholder="PSI" value="<?php echo $presionadcstw2; ?>" <?php echo $d_presionadcstw2; ?>/>
                            <label for="horafinadcstw2">Hora de Fin:</label>
                            <input type="time" id="horafinadcstw2" name="horafinadcstw2" value="<?php echo $horafinadcstw2; ?>" <?php echo $d_horafinadcstw2; ?>/><hr>
                            <br>
                            <h2 style="font-weight: bold !important;">ADICIÓN DE 710CSO050 Y 700STW000</h2>
                            <br>
                            <b>¿Leyó la ficha y hoja de seguridad (FS-01y FS-01-1) para estos productos?</b><br />
                            <a href="img/FDS Soda Caustica Liquida.pdf" target="popup" onclick="window.open('img/FDS Soda Caustica Liquida.pdf','popup','width=859,height=550'); return false;">Ver Ficha de Seguridad</a><br />
                            <table class="table" style="width:50%;">
                                <tr>
                                    <td align="center"><label>Si <input type="radio" id="SeguridadCSOSi" name="SeguridadCSO" value="1" <?php echo $SeguridadCSOSi . ' ' . $d_SeguridadCSO; ?> /> </label></td>
                                    <td align="center"><label>No <input type="radio" id="SeguridadCSONo" name="SeguridadCSO" value="0" <?php echo $SeguridadCSONo . ' ' . $d_SeguridadCSO; ?> /> </label></td>
                                </tr>
                            </table>
                            <p style="color: red;"><u><i>EN CASO DE INCIDENTE CON CSO050 (Contacto con piel, ojos, inhalacion o derrame o incendio consulte la lista de contingencia.</i></u></p>
                            <a href="img/Sodacontingencia.PNG" target="popup" onclick="window.open('img/Sodacontingencia.PNG','popup','width=883,height=409'); return false;">Ver</a> <br />
                            <b>¿Cuenta con el equipo de seguridad adecuado para el manejo del CSO050?</b><br />
                            <table class="table" style="width:50%;">
                                <tr>
                                    <td align="center"><label>Si <input type="radio" id="EquipoCSOSi" name="EquipoCSO" value="1" <?php echo $EquipoCSOSi . ' ' . $d_EquipoCSO; ?> /></label></td>
                                    <td align="center"><label>No <input type="radio" id="EquipoCSONo" name="EquipoCSO" value="0" <?php echo $EquipoCSONo . ' ' . $d_EquipoCSO; ?> /></label></td>
                                </tr>
                            </table>
                            <i>En caso de respuesta negativa, contactar a Salud Ocupacional para reemplazo o entrega del EPP apropiado.</i>
                            <br />
                            <input type="submit" value="Guardar y Continuar" class="boton boton-opcion rounded-3">
                        </div>
                    </form>
                    <form id="formNfo" name="formNfo" method="POST" action="guardarFormulario.php">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="hidden" name="pasos" value="7">
                        <br />
                        <!-- Paso 11 -->
                        <div class="container" id="ReaccionNeutra" style="display: <?php echo $ReaccionNeutra; ?>;">
                            <b>Sin vapor adicionar (7) CSC050 en 4 horas como tiempo máximo conservando T = 94 - 98 °C. Válvulas: <font color="#ff6600">P-25,P-26,P-27,P-28</font></b>
                            <br><br>
                            <h2 style="font-weight: bold !important;">SEGUIMIENTO DE REACCIÓN DE NEUTRALIZACIÓN</h2>
                            <h4>(Si se presenta reflujo, mencionarlo en observaciones)</h4>
                            <br>
                            <b>Hora de Inicio</b><br />
                            <input type="hidden" name="ReaccionNeutra1" value="ReaccionNeutra1">
                            <label for="horainicioneut">Hora de Inicio:</label>
                            <input <?php echo $autoFocus6; ?> type="time" id="horainicioneut" name="horainicioneut" value="<?php echo $horainicioneut; ?>" <?php echo $d_horainicioneut; ?> /><br />
                            <!-- Validar horas para que aparezcan las siguientes cuando se llenen -->
                            <b>Hora 1</b><br />
                            <label for="tempneut1">Temperatura: </label>
                            <input type="number" id="tempneut1" name="tempneut1" value="<?php echo $tempneut1; ?>" placeholder="°C" <?php echo $d_tempneut1; ?> />
                            <label for="presionneut1">Presión de Vapor:</label>
                            <input type="number" id="presionneut1" name="presionneut1" placeholder="PSI" value="<?php echo $presionneut1; ?>" <?php echo $d_presionneut1; ?> />
                            <b>Observaciones/Comentarios</b>
                            <input type="text" name="comentarioneut1" value="<?php echo $comentarioneut1; ?>" <?php echo $d_comentarioneut1; ?> />
                            <hr>
                            <b>Hora 2</b><br />
                            <input type="hidden" name="ReaccionNeutra2" value="ReaccionNeutra2">
                            <label for="tempneut2">Temperatura: </label>
                            <input type="number" id="tempneut2" name="tempneut2" value="<?php echo $tempneut2; ?>" placeholder="°C" <?php echo $d_tempneut2; ?> />
                            <label for="presionneut2">Presión de Vapor:</label>
                            <input type="number" id="presionneut2" name="presionneut2" placeholder="PSI" value="<?php echo $presionneut2; ?>" <?php echo $d_presionneut2; ?> />
                            <b>Observaciones/Comentarios</b>
                            <input type="text" name="comentarioneut2" value="<?php echo $comentarioneut2; ?>" <?php echo $d_comentarioneut2; ?> />
                            <hr>
                            <b>Hora 3</b><br />
                            <label for="tempneut3">Temperatura: </label>
                            <input type="hidden" name="ReaccionNeutra3" value="ReaccionNeutra3">
                            <input type="number" id="tempneut3" name="tempneut3" value="<?php echo $tempneut3; ?>" placeholder="°C" <?php echo $d_tempneut3; ?> />
                            <label for="presionneut3">Presión de Vapor: </label>
                            <input type="number" id="presionneut3" name="presionneut3" placeholder="PSI" value="<?php echo $presionneut3; ?>" <?php echo $d_presionneut3; ?> />
                            <b>Observaciones/Comentarios</b>
                            <input type="text" name="comentarioneut3" value="<?php echo $comentarioneut3; ?>" <?php echo $d_comentarioneut3; ?> />
                            <hr>
                            <b>Hora 4</b><br />
                            <input type="hidden" name="ReaccionNeutra4" value="ReaccionNeutra4">
                            <label for="tempneut4">Temperatura: </label>
                            <input type="number" id="tempneut4" name="tempneut4" value="<?php echo $tempneut4; ?>" placeholder="°C" <?php echo $d_tempneut4; ?> />
                            <label for="presionreac4">Presión de Vapor:</label>
                            <input type="number" id="presionneut4" name="presionneut4" placeholder="PSI" value="<?php echo $presionneut4; ?>" <?php echo $d_presionneut4; ?> />
                            <b>Observaciones/Comentarios</b>
                            <input type="text" name="comentarioneut4" value="<?php echo $comentarioneut4; ?>" <?php echo $d_comentarioneut4; ?> />
                            <hr>
                            <label for="horafinneut">Hora de Fin:</label>
                            <input type="time" id="horafinneut" name="horafinneut" value="<?php echo $horafinneut; ?>" <?php echo $d_horafinneut; ?> />
                            <hr>
                            <b>Homogeneizar por 3 horas. Si es necesario dar pase de vapor por poco tiempo para mantener temperatura.</b><br />
                            <br>
                            <h2 style="font-weight: bold !important;">SEGUIMIENTO HOMEGENIZACIÓN</h2>
                            <br>
                            <b>Hora de Inicio</b><br />
                            <label for="horainiciohomoge">Hora de Inicio:</label>
                            <input type="hidden" name="homogenizacion" value="homogenizacion">
                            <input type="time" id="horainiciohomoge" name="horainiciohomoge" value="<?php echo $horainiciohomoge; ?>" <?php echo $d_horainiciohomoge; ?> /><br />
                            <b>Hora 1</b><br />
                            <label for="temphomoge1">Temperatura: </label>
                            <input type="number" id="temphomoge1" name="temphomoge1" value="<?php echo $temphomoge1; ?>" placeholder="°C" <?php echo $d_temphomoge1; ?> />
                            <label for="presionhomoge1">Presión de Vapor:</label>
                            <input type="number" id="presionhomoge1" name="presionhomoge1" placeholder="PSI" value="<?php echo $presionhomoge1; ?>" <?php echo $d_presionhomoge1; ?> />
                            <b>Observaciones/Comentarios</b>
                            <input type="text" name="comentariohomoge1" value="<?php echo $comentariohomoge1; ?>" <?php echo $d_comentariohomoge1; ?> >
                            <hr>
                            <b>Hora 2</b><br />
                            <input type="hidden" name="homogenizacion2" value="homogenizacion2">
                            <label for="temphomoge2">Temperatura: </label>
                            <input type="number" id="temphomoge2" name="temphomoge2" value="<?php echo $temphomoge2; ?>" placeholder="°C" <?php echo $d_temphomoge2; ?> />
                            <label for="presionhomoge2">Presión de Vapor:</label>
                            <input type="number" id="presionhomoge2" name="presionhomoge2" placeholder="PSI" value="<?php echo $presionhomoge2; ?>" <?php echo $d_presionhomoge2; ?> />
                            <b>Observaciones/Comentarios</b>
                            <input type="text" name="comentariohomoge2" value="<?php echo $comentariohomoge2; ?>" <?php echo $d_comentariohomoge2; ?> ><hr>
                            <b>Hora 3</b><br />
                            <input type="hidden" name="homogenizacion3" value="homogenizacion3">
                            <label for="temphomoge3">Temperatura: </label>
                            <input type="number" id="temphomoge3" name="temphomoge3" value="<?php echo $temphomoge3; ?>" placeholder="°C" <?php echo $d_temphomoge3; ?> />
                            <label for="presionhomoge3">Presión de Vapor: </label>
                            <input type="number" id="presionhomoge3" name="presionhomoge3" placeholder="PSI" value="<?php echo $presionhomoge3; ?>" <?php echo $d_presionhomoge3; ?> />
                            <br />
                            <label for="horafinhomoge">Hora de Fin:</label>
                            <input type="time" id="horafinhomoge" name="horafinhomoge" value="<?php echo $horafinhomoge; ?>" <?php echo $d_horafinhomoge; ?> />
                            <hr>
                            <b>Evaluar presencia de formol, si hay presencia dar una hora más de reacción. Válvula <font color="#ff6600">P-43</font></b><br />
                            <b>Hay presencia de FDO035? </b><br />
                            <table class="table" style="width:50%;">
                                <tr>
                                    <td align="center"><label>Si <input type="radio" id="OlorFormolSi" name="OlorFormol" value="1" <?php echo $OlorFormolSi . ' ' . $d_OlorFormol; ?>/></label></td>
                                    <td align="center"><label>No <input type="radio" id="OlorFormolNo" name="OlorFormol" value="0" <?php echo $OlorFormolNo . ' ' . $d_OlorFormol; ?>/></label></td>
                                </tr>
                            </table>

                            <!--formulario presencia de formol-->
                            <div class="container" id="RevisionOlorFDO035" style="display: <?php echo $RevisionOlorFDO035; ?>;">
                                <br>
                                <h2><b>REVISIÓN DE OLOR A FDO035</b></h2>
                                <br>
                                <div>
                                    <br><label for="horaInicioFDO_1" style="font-weight: bold;">Hora 1</label><br>
                                    <input type="hidden" name="RevisionOlorFDO035_1" value="RevisionOlorFDO035_1">
                                    <label for="horaInicioFDO_1">Hora de Inicio</label>
                                    <input type="time" id="horaInicioFDO_1" name="horaInicioFDO_1" value="<?php echo $horaInicioFDO_1; ?>" <?php echo $d_horaInicioFDO_1; ?> />
                                    <label for="temperaturaFDO_1">Temperatura</label>
                                    <input type="number" id="temperaturaFDO_1" name="temperaturaFDO_1" value="<?php echo $temperaturaFDO_1; ?>" placeholder="°C" <?php echo $d_temperaturaFDO_1; ?> />
                                    <label for="presionFDO_1">Presión de Vapor</label>
                                    <input type="number" id="presionFDO_1" name="presionFDO_1" placeholder="PSI" value="<?php echo $presionFDO_1; ?>" <?php echo $presionFDO_1; ?> />
                                    <br>
                                    <label for="horaFinFDO_1">Hora de Fin</label>
                                    <input type="time" id="horaFinFDO_1" name="horaFinFDO_1" value="<?php echo $horaFinFDO_1; ?>" <?php echo $d_horaFinFDO_1; ?> />
                                </div>
                                <br>
                                <div>
                                    <b>Evaluar presencia de formol, si hay presencia dar una hora más de reacción.</b>
                                    <br>
                                    <b>¿Sigue habiendo presencia de olor a FDO035?.</b>
                                    <table class="table" style="width:50%;">
                                        <tr>
                                            <td align="center"><label>Si <input type="radio" id="OlorFormolSi2" name="OlorFormol2" value="1" <?php echo $OlorFormolSi2 . ' ' . $d_OlorFormol2; ?>/></label></td>
                                            <td align="center"><label>No <input type="radio" id="OlorFormolNo2" name="OlorFormol2" value="0" <?php echo $OlorFormolNo2 . ' ' . $d_OlorFormol2; ?>/></label></td>
                                        </tr>
                                    </table>
                                </div>
                                <br>
                                <br>
                                <div id="OlorFormolSigue" style="display: <?php echo $OlorFormolSigue; ?>;">
                                    <label for="horaInicioFDO_1" style="font-weight: bold;">Hora 2</label><br>
                                    <input type="hidden" name="RevisionOlorFDO035_2" value="RevisionOlorFDO035_2">
                                    <label for="horaInicioFDO_2">Hora de Inicio</label>
                                    <input type="time" id="horaInicioFDO_2" name="horaInicioFDO_2" value="<?php echo $horaInicioFDO_2; ?>" <?php echo $d_horaInicioFDO_2; ?> /><br />
                                    <label for="temperaturaFDO_2">Temperatura</label>
                                    <input type="number" id="temperaturaFDO_2" name="temperaturaFDO_2" value="<?php echo $temperaturaFDO_2; ?>" placeholder="°C" <?php echo $d_temperaturaFDO_2; ?> />
                                    <label for="presionFDO_2">Presión de Vapor</label>
                                    <input type="number" id="presionFDO_2" name="presionFDO_2" placeholder="PSI" value="<?php echo $presionFDO_2; ?>" <?php echo $presionFDO_2; ?> />
                                    <br>
                                    <label for="horaFinFDO_2">Hora de Fin</label>
                                    <input type="time" id="horaFinFDO_2" name="horaFinFDO_2" value="<?php echo $horaFinFDO_2; ?>" <?php echo $d_horaFinFDO_2; ?> />
                                </div>
                                <br>
                            </div>
                            <input type="submit" value="Guardar y Continuar" class="boton boton-opcion rounded-3">
                        </div>
                    </form>
                    <hr>
                    <form id="formNfo" name="formNfo" method="POST" action="guardarFormulario.php">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="hidden" name="pasos" value="8">
                        <div class="container" id="Enfriet85"> <!--style="display: <?php //echo $Enfriet85; ?>"-->
                            <br /><b></b><br />
                            <input type="hidden" name="Enfriet85-" value="Enfriet85-">
                            <label for="temp85">Temperatura: </label>
                            <input type="number" id="temp85" name="temp85" value="<?php echo $temp85; ?>" placeholder="°C" <?php echo $d_temp85; ?> />
                            <b>Adicione (6)STW000 a 85°C</b><br />
                            <label for="horainciostw85">Hora de Inicio:</label>
                            <input type="time" id="horainiciostw85" name="horainiciostw85" value="<?php echo $horainiciostw85; ?>" <?php echo $d_horainiciostw85; ?> />
                            <br />
                            <label for="horafinstw85">Hora de Fin:</label>
                            <input type="time" id="horafinstw85" name="horafinstw85" value="<?php echo $horafinstw85; ?>" <?php echo $d_horafinstw85; ?> >
                            <br />
                            <b>Muestree y ajuste pH(10%) = 7.8 - 8.0.  (CSC050 / SWF098).</b>
                            <br />
                            <label for="ph10">pH(10%): </label>
                            <input type="number" step="any" id="ph10" name="ph10" value="<?php echo $ph10; ?>" placeholder="pH" <?php echo $d_ph10; ?> />
                            <br />
                            <b>Es necesario el ajuste? En caso se ser positiva la respuesta indique la cantidad total usada de CSO050 Y/O SWF098 en kilos:</b><br />
                            <label for="csc050aj">CSC050:</label>
                            <input type="number" id="Csc050Ajuste" name="Csc050Ajuste" value="<?php echo $Csc050Ajuste; ?>" placeholder="Kg" <?php echo $d_Csc050Ajuste; ?> />
                            <label for="stw000aj">SWF098: </label>
                            <input type="number" id="Stw00Ajuste" name="Stw00Ajuste" value="<?php echo $Stw00Ajuste; ?>" placeholder="Kg" <?php echo $d_Stw00Ajuste; ?> />
                            <label for="ph10Fin">pH(10%) Final: </label>
                            <input type="number" step="any" id="ph10Fin" name="ph10Fin" value="<?php echo $ph10Fin; ?>" placeholder="pH" <?php echo $d_ph10Fin; ?> />
                            <br />
                            <b>El aspecto final del producto es brillante, sin sedimento y sin turbidez?</b><br />
                            <table class="table" style="width:50%;">
                                <tr>
                                    <td align="center"><label>Si <input type="radio" id="ProductoBrillanteSi" name="ProductoBrillante" value="1" <?php echo $ProductoBrillanteSi . ' ' . $d_ProductoBrillante; ?> /></label></td>
                                    <td align="center"><label>No <input type="radio" id="ProductoBrillanteNo" name="ProductoBrillante" value="0" <?php echo $ProductoBrillanteNo . ' ' . $d_ProductoBrillante; ?> /></label></td>
                                </tr>
                            </table>
                            <div id="FiltroLukas" style="display: <?php echo $FiltroLukas; ?>;">
                                <i>Si la respuesta es negativa, filtre por el Filtro lukas directamente desde el reactor</i><br />
                                <label for="HoraInicioLukas">Hora de Inicio:</label>
                                <input type="time" id="HoraInicioLukas" name="HoraInicioLukas" value="<?php echo $HoraInicioLukas; ?>" <?php echo $d_HoraInicioLukas; ?> />
                                <label for="HoraFinLukas">Hora de Fin:</label>
                                <input type="time" id="HoraFinLukas" name="HoraFinLukas" value="<?php echo $HoraFinLukas; ?>" <?php echo $d_HoraFinLukas; ?> /><br />
                                <b>El aspecto final del producto despues de la filtracion es brillante, sin sedimento y sin turbidez?</b><br />
                                <table class="table" style="width:50%;">
                                    <tr>
                                        <td align="center"><label>Si <input type="radio" id="ProductoBrillante2Si" name="ProductoBrillante2" value="1" <?php echo $ProductoBrillante2Si . ' ' . $d_ProductoBrillante2; ?> /></label></td>
                                        <td align="center"><label>No <input type="radio" id="ProductoBrillante2No" name="ProductoBrillante2" value="0" <?php echo $ProductoBrillante2No . ' ' . $d_ProductoBrillante2; ?> /></label></td>
                                    </tr>
                                </table>
                            </div>

                            <div  id="ProcesoDescarga" style="display: <?php echo $ProcesoDescarga; ?>;">
                                <label for="HoraFinal">Notificar al laboratorio</label>
                                <input type="text" name="NotificarLaboratorio" value="<?php echo $NotificarLaboratorio; ?>" <?php echo $d_NotificarLaboratorio; ?>><br />
                            </div>
                            <div id="ProcesoDescarga" style="display: <?php echo $ProcesoDescarga; ?>;">
                                <br />
                                <i>Si la respuesta es afirmativa, se da por terminado el proceso de produccion y se continua con la descarga del producto</i>
                                <br />
                            </div>
                            <br />
                            <input type="submit" value="Guardar y Continuar" class="boton boton-opcion rounded-3"> 
                        </div>
                    </form>
                    <br>
                    <hr>
                    <br>

                    <!-- AQUI FORMULARIO PREVIA -->
                    <form id="formNfo" name="formNfo" method="POST" action="guardarFormulario.php">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="hidden" name="pasos" value="99">
                        <div>
                            <br>
                            <h2 style="font-weight: bold !important;">FORMULARIO PREVIA</h2>
                            <br>
                            <b>¿Enviar previa al laboratorio antes de la descarga?</b><br/>
                            <table class="table" style="width:50%;">
                                <tr>
                                    <td align="center"><label>Si <input type="radio" id="EnviarPrevia1Si" name="EnviarPrevia1" value="1" <?php echo $EnviarPrevia1Si . ' ' . $d_EnviarPrevia1; ?> /></label></td>
                                    <td align="center"><label>No <input type="radio" id="EnviarPrevia1No" name="EnviarPrevia1" value="0" <?php echo $EnviarPrevia1No . ' ' . $d_EnviarPrevia1; ?> /></label></td>
                                </tr>
                            </table>

                            <div id="ProcesoPrevia" style="display: <?php echo $ProcesoPrevia; ?>;">
                            
                                <div id="Previa1">
                                    <br>
                                    <h2 style="font-weight: bold !important;">Pevia 1</h2>
                                    <br>
                                    <!-- NUEVO CAMPO SOLICITANTE-->
                                    <label for="solicitantePrevia1">Solicitante</label>
                                    <input type="text" name="solicitantePrevia1_hidden" value="<?php echo $solicitantePrevia1; ?>" <?php echo $d_solicitantePreviaInput1 ?> readonly>
                                    <select name="solicitantePrevia1" id="solicitantePrevia1" <?php echo $d_solicitantePrevia1 ?>>
                                        <?php
                                        if ($solicitantePrevia1 == '') {
                                            echo '<option value="" selected>Seleccione el Responsable</option>';
                                        }

                                        while ($operator = $query_operators->fetch_array(MYSQLI_BOTH)) {
                                            if ($solicitantePrevia1 == $operator["Nombre"] . ' ' . $operator["Apellido"]) {
                                                $selected = 'selected';
                                            } else {
                                                $selected = '';
                                            }
                                            echo '<option value="' . $operator["Nombre"] . ' ' . $operator["Apellido"] . '" ' . $selected . '>' . $operator["Nombre"] . ' ' . $operator["Apellido"] . '</option>';
                                        }

                                        while ($coordinator = $query_coordinator->fetch_array(MYSQLI_BOTH)) {
                                            if ($solicitantePrevia1 == $coordinator["Nombre"] . ' ' . $coordinator["Apellido"]) {
                                                $selected = 'selected';
                                            } else {
                                                $selected = '';
                                            }
                                            echo '<option value="' . $coordinator["Nombre"] . ' ' . $coordinator["Apellido"] . '"' . $selected . '>' . $coordinator["Nombre"] . ' ' . $coordinator["Apellido"] . '</option>';
                                        }
                                        ?>        
                                    </select>
                                    <!--FIN NUEVO CAMPO SOLICITANTE-->
                                    
                                    <!-- HORA INICIO PREVIA 1 -->
                                    <label for="HoraInicioPrevia1">Hora de Inicio:</label>
                                    <input type="time" id="HoraInicioPrevia1" name="HoraInicioPrevia1" value="<?php echo $HoraInicioPrevia1; ?>" <?php echo $d_HoraInicioPrevia1; ?> />
                                    <!-- FIN HORA INICIO PREVIA 1 -->

                                    <!--NUEVO CAMPO ASPECTO PREVIA-->
                                    <label for="AspectoPrevia1">Aspecto</label>
                                    <input type="text" name="AspectoPrevia1_hidden" value="<?php echo $AspectoPrevia1; ?>" <?php echo $d_AspectoPreviaInput1 ?> readonly>
                                    <select name="AspectoPrevia1" id="AspectoPrevia1" <?php echo $d_AspectoPrevia1; ?>>
                                        <?php
                                        if ($AspectoPrevia1 == '') {
                                            echo '<option value="" selected>Seleccione el Aspecto</option>';
                                        }
                                        ?>

                                        <option value="Liquido - Opaco - Homogeneo" <?php if ($AspectoPrevia1 == 'Liquido - Opaco - Homogeneo') {
                                            echo 'selected';
                                        } ?>>Liquido - Opaco - Homogeneo</option>
                                        <option value="Liquido - Transparente - Homogeneo" <?php if ($AspectoPrevia1 == 'Liquido - Transparente - Homogeneo') {
                                            echo 'selected';
                                        } ?>>Liquido - Transparente - Homogeneo</option>
                                    </select>
                                    <!--FIN NUEVO CAMPO ASPECTO PREVIA-->

                                    <!--NUEVO CAMPO SOLIDOSO PREVIA-->
                                    <label for="SolidosPrevia1">Solidos</label>
                                    <input type="number" step="any" id="SolidosPrevia1" name="SolidosPrevia1" value="<?php echo $SolidosPrevia1; ?>" placeholder="Solidos" <?php echo $d_SolidosPrevia1; ?>>
                                    <!--FIN NUEVO CAMPO SOLIDOS PREVIA-->

                                    <!--NUEVO CAMPO PH PREVIA-->
                                    <label for="phPrevia1">Ph Previa</label>
                                    <input type="number" step="any" id="phPrevia1" name="phPrevia1" value="<?php echo $phPrevia1; ?>" placeholder="Ph Previa" <?php echo $d_phPrevia1; ?>>
                                    <!--FIN NUEVO CAMPO SOLIDOS PREVIA-->

                                    <!--NUEVO CAMPO SOLUBILIDAD PREVIA-->
                                    <label for="SolubilidadPrevia1">Solubilidad</label>
                                    <input type="text" name="SolubilidadPrevia1_hidden" value="<?php echo $SolubilidadPrevia1; ?>" <?php echo $d_SolubilidadPreviaInput1 ?> readonly>
                                    <select name="SolubilidadPrevia1" id="SolubilidadPrevia1" <?php echo $d_SolubilidadPrevia1; ?>>
                                        <?php
                                        if ($SolubilidadPrevia1 == '') {
                                            echo '<option value="" selected>Seleccione la Solubilidad</option>';
                                        }
                                        ?>

                                        <option value="Opaco" <?php if ($SolubilidadPrevia1 == 'Opaco') {
                                            echo 'selected';
                                        } ?>>Opaco</option>
                                        <option value="Total" <?php if ($SolubilidadPrevia1 == 'Total') {
                                            echo 'selected';
                                        } ?>>Total</option>
                                    </select>
                                    <!--FIN NUEVO CAMPO ASPECTO PREVIA-->  
                                    
                                    <!-- HORA FIN PREVIA 1 -->
                                    <label for="HoraFinPrevia1">Hora de Fin:</label>
                                    <input type="time" id="HoraFinPrevia1" name="HoraFinPrevia1" value="<?php echo $HoraFinPrevia1; ?>" <?php echo $d_HoraFinPrevia1; ?> >
                                    <!-- FIN HORA FIN PREVIA 1 -->   
                                    
                                    <!-- NUEVO CAMPO ANÁLIZADA POR -->
                                    <label for="PreviaAnalizadaPor1">Analizada Por</label>
                                    <input type="text" name="PreviaAnalizadaPor1_hidden" value="<?php echo $PreviaAnalizadaPor1; ?>" <?php echo $d_PreviaAnalizadaPorInput1 ?> readonly>
                                    <select name="PreviaAnalizadaPor1" id="PreviaAnalizadaPor1" <?php echo $d_PreviaAnalizadaPor1; ?>>
                                        <?php
                                        if ($PreviaAnalizadaPor1 == '') {
                                            echo '<option value="" selected>Seleccione el Analísta</option>';
                                        }
                                        ?>

                                        <option value="Eliana Castaño" <?php if ($PreviaAnalizadaPor1 == 'Eliana Castaño') {
                                            echo 'selected';
                                        } ?>>Eliana Castaño</option>
                                        <option value="Alejandra Arbelaez" <?php if ($PreviaAnalizadaPor1 == 'Alejandra Arbelaez') {
                                            echo 'selected';
                                        } ?>>Alejandra Arbelaez</option>
                                    </select>
                                    <!-- FIN NUEVO CAMPO ANÁLIZADA POR -->

                                    <!-- NUEVO CAMPO APROBADA POR -->
                                    <label for="PreviaAprobadaPor1">Aprobada Por</label>
                                    <input type="text" name="PreviaAprobadaPor1_hidden" value="<?php echo $PreviaAprobadaPor1; ?>" <?php echo $d_PreviaAprobadaPorInput1 ?> readonly>
                                    <select name="PreviaAprobadaPor1" id="PreviaAprobadaPor1" <?php echo $d_PreviaAprobadaPor1; ?>>
                                        <?php
                                        if ($PreviaAprobadaPor1 == '') {
                                            echo '<option value="" selected>Seleccione el Analísta</option>';
                                        }
                                        ?>

                                        <option value="Eliana Castaño" <?php if ($PreviaAprobadaPor1 == 'Eliana Castaño') {
                                            echo 'selected';
                                        } ?>>Eliana Castaño</option>
                                        <option value="Alejandra Arbelaez" <?php if ($PreviaAprobadaPor1 == 'Alejandra Arbelaez') {
                                            echo 'selected';
                                        } ?>>Alejandra Arbelaez</option>
                                    </select>
                                    <!-- FIN NUEVO CAMPO APROBADA POR -->

                                    <!--NUEVOs CAMPOS CHECK PREVIA-->
                                    <label>Estado</label>
                                    <div style="display: grid; grid-template-columns: 200px 200px 200px; justify-content: center;">
                                        <div style="padding: 0px 10px;">
                                            <label for="AjustarPrevia1">Ajustar Previa</label>
                                            <input type="checkbox" id="AjustarPrevia1" name="AjustarPrevia1" value="<?php echo $AjustarPreviaVal1; ?>" <?php echo $AjustarPrevia1; ?> <?php echo $d_AjustarPrevia1; ?>>
                                        </div>
                                        <div style="padding: 0px 10px;">
                                            <label for="PreviaConforme1">Previa Conforme</label>
                                            <input type="checkbox" id="PreviaConforme1" name="PreviaConforme1" value="<?php echo $PreviaConformeVal1; ?>" <?php echo $PreviaConforme1; ?> <?php echo $d_PreviaConforme1; ?>>
                                        </div>
                                        <div style="padding: 0px 10px;">
                                            <label for="PreviaNoConforme1">Previa No Conforme</label>
                                            <input type="checkbox" id="PreviaNoConforme1" name="PreviaNoConforme1" value="<?php echo $PreviaNoConformeVal1; ?>" <?php echo $PreviaNoConforme1; ?> <?php echo $d_PreviaNoConforme1; ?>>
                                        </div>
                                    </div>
                                    <!--FIN NUEVO CAMPOS CHECK PREVIA-->
                                </div>

                                <br>
                                <hr>
                                <br>   

                                <div id="Previa2" name="Previa2" <?php echo $Previa2; ?>>
                                    <br>
                                    <h2 style="font-weight: bold !important;">Previa 2</h2>
                                    <br>
                                    <!-- NUEVO CAMPO SOLICITANTE-->
                                    <label for="solicitantePrevia2">Solicitante</label>
                                    <input type="text" name="solicitantePrevia2_hidden" value="<?php echo $solicitantePrevia2; ?>" <?php echo $d_solicitantePreviaInput2 ?> readonly>
                                    <select name="solicitantePrevia2" id="solicitantePrevia2" <?php echo $d_solicitantePrevia2 ?>>
                                        <?php
                                        if ($solicitantePrevia2 == '') {
                                            echo '<option value="" selected>Seleccione el Responsable</option>';
                                        }
                                        $query_operator2 = $_user->get_users_rol(1);
                                        while ($operator = $query_operator2->fetch_array(MYSQLI_BOTH)) {
                                            if ($solicitantePrevia2 == $operator["Nombre"] . ' ' . $operator["Apellido"]) {
                                                $selected = 'selected';
                                            } else {
                                                $selected = '';
                                            }
                                            echo '<option value="' . $operator["Nombre"] . ' ' . $operator["Apellido"] . '" ' . $selected . '>' . $operator["Nombre"] . ' ' . $operator["Apellido"] . '</option>';
                                        }
                                        $query_coordinator2 = $_user->get_users_rol(3);
                                        while ($coordinator = $query_coordinator2->fetch_array(MYSQLI_BOTH)) {
                                            if ($solicitantePrevia2 == $coordinator["Nombre"] . ' ' . $coordinator["Apellido"]) {
                                                $selected = 'selected';
                                            } else {
                                                $selected = '';
                                            }
                                            echo '<option value="' . $coordinator["Nombre"] . ' ' . $coordinator["Apellido"] . '"' . $selected . '>' . $coordinator["Nombre"] . ' ' . $coordinator["Apellido"] . '</option>';
                                        }
                                        ?>        
                                    </select>
                                    <!--FIN NUEVO CAMPO SOLICITANTE-->
                                    
                                    <!-- HORA INICIO PREVIA 2 -->
                                    <label for="HoraInicioPrevia2">Hora de Inicio:</label>
                                    <input type="time" id="HoraInicioPrevia2" name="HoraInicioPrevia2" value="<?php echo $HoraInicioPrevia2; ?>" <?php echo $d_HoraInicioPrevia2; ?> />
                                    <!-- FIN HORA INICIO PREVIA 2 -->

                                    <!--NUEVO CAMPO ASPECTO PREVIA-->
                                    <label for="AspectoPrevia2">Aspecto</label>
                                    <input type="text" name="AspectoPrevia2_hidden" value="<?php echo $AspectoPrevia2; ?>" <?php echo $d_AspectoPreviaInput2 ?> readonly>
                                    <select name="AspectoPrevia2" id="AspectoPrevia2" <?php echo $d_AspectoPrevia2; ?>>
                                        <?php
                                        if ($AspectoPrevia2 == '') {
                                            echo '<option value="" selected>Seleccione el Aspecto</option>';
                                        }
                                        ?>

                                        <option value="Liquido - Opaco - Homogeneo" <?php if ($AspectoPrevia2 == 'Liquido - Opaco - Homogeneo') {
                                            echo 'selected';
                                        } ?>>Liquido - Opaco - Homogeneo</option>
                                        <option value="Liquido - Transparente - Homogeneo" <?php if ($AspectoPrevia2 == 'Liquido - Transparente - Homogeneo') {
                                            echo 'selected';
                                        } ?>>Liquido - Transparente - Homogeneo</option>
                                    </select>
                                    <!--FIN NUEVO CAMPO ASPECTO PREVIA-->

                                    <!--NUEVO CAMPO SOLIDOSO PREVIA-->
                                    <label for="SolidosPrevia2">Solidos</label>
                                    <input type="number" step="any" id="SolidosPrevia2" name="SolidosPrevia2" value="<?php echo $SolidosPrevia2; ?>" placeholder="Solidos" <?php echo $d_SolidosPrevia2; ?>>
                                    <!--FIN NUEVO CAMPO SOLIDOS PREVIA-->

                                    <!--NUEVO CAMPO PH PREVIA-->
                                    <label for="phPrevia2">Ph Previa</label>
                                    <input type="number" step="any" id="phPrevia2" name="phPrevia2" value="<?php echo $phPrevia2; ?>" placeholder="Ph Previa" <?php echo $d_phPrevia2; ?>>
                                    <!--FIN NUEVO CAMPO SOLIDOS PREVIA-->

                                    <!--NUEVO CAMPO SOLUBILIDAD PREVIA-->
                                    <label for="SolubilidadPrevia2">Solubilidad</label>
                                    <input type="text" name="SolubilidadPrevia2_hidden" value="<?php echo $SolubilidadPrevia2; ?>" <?php echo $d_SolubilidadPreviaInput2 ?> readonly>
                                    <select name="SolubilidadPrevia2" id="SolubilidadPrevia2" <?php echo $d_SolubilidadPrevia2; ?>>
                                        <?php
                                        if ($SolubilidadPrevia2 == '') {
                                            echo '<option value="" selected>Seleccione la Solubilidad</option>';
                                        }
                                        ?>

                                        <option value="Opaco" <?php if ($SolubilidadPrevia2 == 'Opaco') {
                                            echo 'selected';
                                        } ?>>Opaco</option>
                                        <option value="Total" <?php if ($SolubilidadPrevia2 == 'Total') {
                                            echo 'selected';
                                        } ?>>Total</option>
                                    </select>
                                    <!--FIN NUEVO CAMPO ASPECTO PREVIA-->  
                                    
                                    <!-- HORA FIN PREVIA 2 -->
                                    <label for="HoraFinPrevia2">Hora de Fin:</label>
                                    <input type="time" id="HoraFinPrevia2" name="HoraFinPrevia2" value="<?php echo $HoraFinPrevia2; ?>" <?php echo $d_HoraFinPrevia2; ?> >
                                    <!-- FIN HORA FIN PREVIA 2 -->   
                                    
                                    <!-- NUEVO CAMPO ANÁLIZADA POR -->
                                    <label for="PreviaAnalizadaPor2">Analizada Por</label>
                                    <input type="text" name="PreviaAnalizadaPor2_hidden" value="<?php echo $PreviaAnalizadaPor2; ?>" <?php echo $d_PreviaAnalizadaPorInput2 ?> readonly>
                                    <select name="PreviaAnalizadaPor2" id="PreviaAnalizadaPor2" <?php echo $d_PreviaAnalizadaPor2; ?>>
                                        <?php
                                        if ($PreviaAnalizadaPor2 == '') {
                                            echo '<option value="" selected>Seleccione el Analísta</option>';
                                        }
                                        ?>

                                        <option value="Eliana Castaño" <?php if ($PreviaAnalizadaPor2 == 'Eliana Castaño') {
                                            echo 'selected';
                                        } ?>>Eliana Castaño</option>
                                        <option value="Alejandra Arbelaez" <?php if ($PreviaAnalizadaPor2 == 'Alejandra Arbelaez') {
                                            echo 'selected';
                                        } ?>>Alejandra Arbelaez</option>
                                    </select>
                                    <!-- FIN NUEVO CAMPO ANÁLIZADA POR -->

                                    <!-- NUEVO CAMPO APROBADA POR -->
                                    <label for="PreviaAprobadaPor2">Aprobada Por</label>
                                    <input type="text" name="PreviaAprobadaPor2_hidden" value="<?php echo $PreviaAprobadaPor2; ?>" <?php echo $d_PreviaAprobadaPorInput2 ?> readonly>
                                    <select name="PreviaAprobadaPor2" id="PreviaAprobadaPor2" <?php echo $d_PreviaAprobadaPor2; ?>>
                                        <?php
                                        if ($PreviaAprobadaPor2 == '') {
                                            echo '<option value="" selected>Seleccione el Analísta</option>';
                                        }
                                        ?>

                                        <option value="Eliana Castaño" <?php if ($PreviaAprobadaPor2 == 'Eliana Castaño') {
                                            echo 'selected';
                                        } ?>>Eliana Castaño</option>
                                        <option value="Alejandra Arbelaez" <?php if ($PreviaAprobadaPor2 == 'Alejandra Arbelaez') {
                                            echo 'selected';
                                        } ?>>Alejandra Arbelaez</option>
                                    </select>
                                    <!-- FIN NUEVO CAMPO APROBADA POR -->

                                    <!--NUEVOs CAMPOS CHECK PREVIA-->
                                    <label>Estado</label>
                                    <div style="display: grid; grid-template-columns: 200px 200px 200px; justify-content: center;">
                                        <div style="padding: 0px 10px;">
                                            <label for="AjustarPrevia2">Ajustar Previa</label>
                                            <input type="checkbox" id="AjustarPrevia2" name="AjustarPrevia2" value="<?php echo $AjustarPreviaVal2; ?>" <?php echo $AjustarPrevia2; ?> <?php echo $d_AjustarPrevia2; ?>>
                                        </div>
                                        <div style="padding: 0px 10px;">
                                            <label for="PreviaConforme2">Previa Conforme</label>
                                            <input type="checkbox" id="PreviaConforme2" name="PreviaConforme2" value="<?php echo $PreviaConformeVal2; ?>" <?php echo $PreviaConforme2; ?> <?php echo $d_PreviaConforme2; ?>>
                                        </div>
                                        <div style="padding: 0px 10px;">
                                            <label for="PreviaNoConforme2">Previa No Conforme</label>
                                            <input type="checkbox" id="PreviaNoConforme2" name="PreviaNoConforme2" value="<?php echo $PreviaNoConformeVal2; ?>" <?php echo $PreviaNoConforme2; ?> <?php echo $d_PreviaNoConforme2; ?>>
                                        </div>
                                    </div>
                                    <!--FIN NUEVO CAMPOS CHECK PREVIA-->
                                </div>
                                
                                <b>Autoriza el proceso de Descarga?</b><br/>
                                <table class="table" style="width:50%;">
                                    <tr>
                                        <td align="center"><label>Si <input type="radio" id="AutorizaDescargaSi" name="AutorizaDescarga" value="1" <?php echo $AutorizaDescargaSi . ' ' . $d_AutorizaDescarga; ?> /></label></td>
                                        <td align="center"><label>No <input type="radio" id="AutorizaDescargaNo" name="AutorizaDescarga" value="0" <?php echo $AutorizaDescargaNo . ' ' . $d_AutorizaDescarga; ?> /></label></td>
                                    </tr>
                                </table>
                            </div>
                            <input type="submit" value="Guardar y Continuar" class="boton boton-opcion rounded-3">
                            <br />
                            <br />
                        </div>
                    </form>
                    <!-- FIN FORMULARIO PREVIA-->

                    <form id="formNfo" name="formNfo" method="POST" action="guardarFormulario.php">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="hidden" name="pasos" value="9">
                        <!-- Paso 12 -->
                        <div class="container" id="ProcesoDescargaFinal" style="display: <?php echo $ProcesoDescargaFinal; ?>;">
                            <br>
                            <h1>PROCESO DE DESCARGA</h1>
                            <br>
                            <!-- NUEVO CAMPO RESPONSABLE-->
                            <label for="responsableDescarga">Responsable de la Descarga</label>
                            <input type="text" name="responsableDescarga_hidden" value="<?php echo $responsableDescarga; ?>" <?php echo $d_responsableDescargaInput ?> readonly>
                            <select name="responsableDescarga" id="responsableDescarga" <?php echo $d_responsableDescarga; ?>>
                                <?php
                                if ($responsableDescarga == '') {
                                    echo '<option value="" selected>Seleccione el Responsable</option>';
                                }

                                $query_operator = $_user->get_users_rol(1);
                                while ($operator = $query_operator->fetch_array(MYSQLI_BOTH)) {
                                    if ($responsableDescarga == $operator["Nombre"] . ' ' . $operator["Apellido"]) {
                                        $selected = 'selected';
                                    } else {
                                        $selected = '';
                                    }
                                    echo '<option value="' . $operator["Nombre"] . ' ' . $operator["Apellido"] . '" ' . $selected . '>' . $operator["Nombre"] . ' ' . $operator["Apellido"] . '</option>';
                                }
                                ?>        
                            </select>
                            <br>
                            <!--FIN NUEVO CAMPO RESPONSABLE-->

                            <label> <b>¿Leyó la ficha y hoja de seguridad (FS-01y FS-01-1) para eL 720NFO000?</b> 
                            <input <?php echo $autoFocus7; ?> type="checkbox" id="SegNFO" name="SegNFO" value="1" <?php echo $SegNFO; ?> <?php echo $d_SegNFO; ?> /></label>
                            <br />
                            <a href="img/SeguridadFiltradoDescarga.PNG" target="popup" onclick="window.open('img/SeguridadFiltradoDescarga.PNG','popup','width=886,height=260'); return false;">Ver Ficha de Seguridad</a>
                            <br />
                            <p style="color: red;"><u><i>EN CASO DE INCIDENTE CON 720NFO000 (Contacto con piel, ojos, inhalacion o derrame o incendio consulte la lista de contingencia.</i></u></p>
                            <a href="img/ContingenciaFiltradoDescarga.PNG" target="popup" onclick="window.open('img/ContingenciaFiltradoDescarga.PNG','popup','width=886,height=377'); return false;">Ver</a> <br />
                            <b>¿Cuenta con el equipo de seguridad adecuado para el manejo del 720NFO000?</b><br />
                            <table class="table" style="width:50%;">
                                <tr>
                                    <td align="center"><label>Si <input type="radio" id="EquipoNFOSi" name="EquipoNFO" value="1" <?php echo $EquipoNFOSi . ' ' . $d_EquipoNFO; ?> /></label></td>
                                    <td align="center"><label>No <input type="radio" id="EquipoNFONo" name="EquipoNFO" value="0" <?php echo $EquipoNFONo . ' ' . $d_EquipoNFO; ?> /></label></td>
                                </tr>
                            </table>
                            <br />
                            <i>En caso de respuesta negativa, contactar a Salud Ocupacional para reemplazo o entrega del EPP apropiado.</i>
                            <br>
                            <br>
                        </div>

                        <!-- Paso 13 -->
                        <div class="container" id="SuspendioAgitacion" style="display: <?php echo $SuspendioAgitacion; ?> ">
                        <!-- Validar los dos check que no continuen sino estan checkeados -->
                            <label> <b>¿Suspendió la agitación del equipo?</b> 
                            <input type="checkbox" id="AgitacionOff" name="AgitacionOff" value="1" <?php echo $AgitacionOff; ?> <?php echo $d_AgitacionOff; ?>/></label>
                            
                            <label> <b>¿Instalo talego de nylon para la descarga?</b> 
                            <input type="checkbox" id="TalegoDescarga" value="1" name="TalegoDescarga" <?php echo $TalegoDescarga; ?> <?php echo $d_TalegoDescarga; ?>/></label>
                            <br />
                            <b>Realice la descarga a IBC (contenedores) para posterior proceso de secado. Válvulas: <font color="#ff6600">P-48,P-49</font></b>
                            <br />
                            <input type="hidden" name="DescargaIbc" value="DescargaIbc">
                            <label for="horainiciodescarga">Hora de Inicio:</label>
                            <input type="time" id="horainiciodescarga" name="horainiciodescarga" value="<?php echo $horainiciodescarga; ?>" <?php echo $d_horainiciodescarga; ?>/>
                            <br />
                            <label for="horafindescarga">Hora de Fin:</label>
                            <input type="time" id="horafindescarga" name="horafindescarga" value="<?php echo $horafindescarga; ?>" <?php echo $d_horafindescarga; ?>/>
                            <br />
                            <b>¿El talego de nylon quedo con mucho residuo?</b><br />
                            <table class="table" style="width:50%;">
                                <tr>
                                    <td align="center"><label>Si <input type="radio" id="ResiduoTalegoSi" name="ResiduoTalego" value="1" <?php echo $ResiduoTalegoSi . ' ' . $d_ResiduoTalego; ?> /></label></td>
                                    <td align="center"><label>No <input type="radio" id="ResiduoTalegoNo" name="ResiduoTalego" value="0" <?php echo $ResiduoTalegoNo . ' ' . $d_ResiduoTalego; ?> /></label></td>
                                </tr>
                            </table>

                            <!-- NUEVOS CAMPOS DESCARGA-->
                            <br>
                            <label for="descripcionResiduo"><b>Descripción del Residuo</b></label>
                            <br>
                            <textarea name="descripcionResiduo" id="descripcionResiduo" <?php echo $d_descripcionResiduo; ?>><?php echo $descripcionResiduo; ?></textarea>
                            <br>
                            <label for="descripcionResiduo"><b>Báscula Usada</b></label>
                            <input type="text" name="basculaDescarga_hidden" value="<?php echo $basculaDescarga; ?>" <?php echo $d_basculaDescargaInput ?> readonly>
                            <select name="basculaDescarga" id="basculaDescarga" <?php echo $d_basculaDescarga; ?>>
                                <?php if ($basculaDescarga == '') {
                                    echo '<option value="" selected>Seleccione la Báscula</option>';
                                } ?>
                                <option value="Báscula 1" <?php if ($basculaDescarga == 'Báscula 1') {
                                    echo 'selected';
                                } ?>>Báscula 1</option>
                                <option value="Báscula 2" <?php if ($basculaDescarga == 'Báscula 2') {
                                    echo 'selected';
                                } ?>>Báscula 2</option>
                            </select>
                            <!-- FIN NUEVOS CAMPOS DESCARGA-->


                            <label> <b>Enviar muestra final al laboratorio</b> 
                            <input type="checkbox" id="EnviarMuestraFinal" value="1" name="EnviarMuestraFinal" <?php echo $EnviarMuestraFinal; ?> <?php echo $d_EnviarMuestraFinal; ?>/></label>
                            <hr>
                            <br>
                            <h2 style="font-weight: bold;">RESULTADOS</h2>
                            <br>
                            <b>Aspecto:</b>
                            <input type="text" name="Aspecto" value="<?php echo $Aspecto; ?>" <?php echo $d_Aspecto; ?>/>
                            <label for="PorcentajeSolidos">% Solidos (45-50) </label>
                            <input type="text" id="PorcentajeSolidos" name="PorcentajeSolidos" placeholder="%" value="<?php echo $PorcentajeSolidos; ?>" <?php echo $d_PorcentajeSolidos; ?>/>
                            <label for="pH10Final">pH(10%): </label>
                            <input type="text" step="any" id="pH10Final" name="pH10Final" placeholder="pH" value="<?php echo $pH10Final; ?>" <?php echo $d_pH10Final; ?>/>
                            <label for="Solubilidad10">Solubilidad (10%): </label>
                            <input type="text" id="Solubilidad10" name="Solubilidad10" placeholder="%" value="<?php echo $Solubilidad10; ?>" <?php echo $d_Solubilidad10; ?>/>
                            <label for="Solubilidad40">Solubilidad (40%): </label>
                            <input type="text" id="Solubilidad40" name="Solubilidad40" placeholder="%" value="<?php echo $Solubilidad40; ?>" <?php echo $d_Solubilidad40; ?>/>
                            <label for="Rendimiento">Rendimiento: </label>
                            <input type="text" id="Rendimiento" name="Rendimiento" value="<?php echo $Rendimiento; ?>" <?php echo $d_Rendimiento; ?>/>

                            <hr>
                            <br>
                            <h2 style="font-weight: bold;">PROCESO DE LAVADO</h2>
                            <br>
                            <b>¿El proceso a realizar en el reactor es diferente al 720NFO000, 720NFOB00, 180NFOCON?</b><br />
                            <table class="table" style="width:50%;">
                                <tr>
                                    <td align="center"><label>Si <input type="radio" id="ProcesoDifSi" name="ProcesoDif" value="1" <?php echo $ProcesoDifSi . ' ' . $d_ProcesoDif; ?> /></label></td>
                                    <td align="center"><label>No <input type="radio" id="ProcesoDifNo" name="ProcesoDif" value="0" <?php echo $ProcesoDifNo . ' ' . $d_ProcesoDif; ?> /></label></td>
                                </tr>
                            </table>
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="hidden" name="PasoFinal" value="PasoFinal">
                            <!-- Validar con el si. No se muestra con el si -->
                            <div class="container" id="relavarReactor" style="display: <?php echo $relavarReactor; ?>">
                                <i><u>Si la respuesta es negativa lavar el reactor y sistema como sigue:</u></i><br />
                                <label for="horainiciolavado">Hora de Inicio:</label>
                                <input type="time" id="horainiciolavado" name="horainiciolavado" value="<?php echo $horainiciolavado; ?>" <?php echo $d_horainiciolavado; ?>/><br />
                                <b>Enjuagar el vaso con agua, recoger en garrafa x 200 (Derivados del NFO) e identificar para ser usado este en el próximo proceso.</b>
                                <br />
                                <label for="KgEnjuague">Kilos generados en el enjuague: </label>
                                <input type="number" id="KgEnjuague" name="KgEnjuague" placeholder="Kg" value="<?php echo $KgEnjuague; ?>" <?php echo $d_KgEnjuague; ?>/>
                                <b>Cargar 300 kilos de agua aprox., agregar jabón, calentar hasta ebullición y abrir todas la válvulas, para que el vapor lave las tuberías.</b><br />
                                <label for="KgLavado">Kilos generados en de agua de lavado: </label>
                                <input type="number" id="KgLavado" name="KgLavado" placeholder="Kg" value="<?php echo $KgLavado; ?>" <?php echo $d_KgLavado; ?>/>
                                <label for="horafinlavado">Hora de Fin:</label>
                                <input type="time" id="horafinlavado" name="horafinlavado" value="<?php echo $horafinlavado; ?>" <?php echo $d_horafinlavado; ?>/>
                            </div>
                            <input type="submit" value="Guardar y Continuar" class="boton boton-opcion rounded-3">
                            <br />
                            <br />
                        </div>
                    </form>
                    </center>
                </fieldset>
            </form>
        </section>
    </main>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Paso 1
        $("#MatPriSeparadaSi").click(function() {
            if($("#MatPriFP04Si").is(':checked')){
                $("#CheckEquipo").show();
            }
            else{
                $("#CheckEquipo").hide();
            }
        });
        $("#MatPriSeparadaNo").click(function() {
            $("#CheckEquipo").hide();
        });

        // Paso 2
        $("#ReactorLimpioSi").click(function() {
                $("#limpiezaEquipo").show();
        });
        $("#ReactorLimpioNo").click(function() {
            $("#limpiezaEquipo").hide();
        });

        $("#EmisionesFuncionaSi").click(function() {
            if($("#HermeticidadReactorSi").is(':checked')){
                if($("#HermeticidadReactorSi").is(':checked')){
                    if($("#ReactorFuncionaSi").is(':checked')){
                        if($("#VacioFuncionaSi").is(':checked')){
                            if($("#VaporFuncionaSi").is(':checked')){
                                if($("#EnfriamientoFuncionaSi").is(':checked')){
                                    if($("#EmisionesFuncionaSi").is(':checked')){
                                        $("#phsodatanque").show();
                                    }else{$("#phsodatanque").hide();}
                                }else{$("#phsodatanque").hide();}
                            }else{$("#phsodatanque").hide();}
                        }else{$("#phsodatanque").hide();}
                    }else{$("#phsodatanque").hide();}
                }else{$("#phsodatanque").hide();}
            }else{$("#phsodatanque").hide();}
        });
        
        $("#EmisionesFuncionaNo").click(function() {
            $("#phsodatanque").hide();
        });

        $("#phsodatanqueSi").click(function() {
            $("#CondensadorFunciona").show();
        });
        $("#phsodatanqueNo").click(function() {
            $("#CondensadorFunciona").hide();
        });

        $("#CondensadorFuncionaSi").click(function() {
            $("#checkEquipo2").show();
        });
        $("#CondensadorFuncionaNo").click(function() {
            $("#checkEquipo2").hide();
        });

        // Paso 3
        $("#ApruebaInicioNo").click(function() {
            $("#RazonesNoAprob").show();
        });
        $("#ApruebaInicioSi").click(function() {
            $("#RazonesNoAprob").hide();
        });

        // Paso 4
        $("#ApruebaInicioSi").click(function() {
            $("#InicioProceso").show();
        });
        $("#ApruebaInicioNo").click(function() {
            $("#InicioProceso").hide();
        });

        $("#SeguridadNaftalenoSi").click(function() {
            $("#EquipoSeguridad").show();
        });
        $("#SeguridadNaftalenoNo").click(function() {
            $("#EquipoSeguridad").hide();
        });

        // Paso 5
        $("#EquipoNaftalenoSi").click(function() {
            $("#TrituradoSaco").show();
        });
        $("#EquipoNaftalenoNo").click(function() {
            $("#TrituradoSaco").hide();
        });

        $("#EnfriamientoCerrado").click(function() {
            $("#TrituradoSaco2").toggle();
        });

        // Paso 6
        $("#ProblemaFundSi").click(function() {
            $("#AfirmativaRespuesta").show();
            $("#Carga710").hide();
        });
        $("#ProblemaFundNo").click(function() {
            $("#AfirmativaRespuesta").hide();
            $("#Carga710").show();
        });

        // Paso 7
        $("#EquipoSulfuricoSi").click(function() {
            $("#CargueSWF098").show();
        });
        $("#EquipoSulfuricoNo").click(function() {
            $("#CargueSWF098").hide();
        });

        $("#ProblemaSWFOSi").click(function() {
            $("#_TextoProblemaSWFO").show();
        });
        $("#ProblemaSWFONo").click(function() {
            $("#_TextoProblemaSWFO").hide();
        });

        // Paso 8
        $("#EquipoFDOSi").click(function() {
            $("#RevisoConexion").show();
        });
        $("#EquipoFDONo").click(function() {
            $("#RevisoConexion").hide();
        });

        // Paso 9
        // $("#CapacidadTanque").click(function() {
        //     $("#Carga700").toggle();
        // });

        // Paso 10
        $("#ProblemaCondensacionSi").click(function() {
            $("#TextoProblemaCondensacion").show();
            $("#AdicionarSTW").hide();
        });
        $("#ProblemaCondensacionNo").click(function() {
            $("#TextoProblemaCondensacion").hide();
            $("#AdicionarSTW").show();
        });

        // Paso 11
        $("#EquipoCSOSi").click(function() {
            $("#ReaccionNeutra").show();
        });
        $("#EquipoCSONo").click(function() {
            $("#ReaccionNeutra").hide();
        });
        
        $("#OlorFormolSi").click(function() {
            $("#PositivaCSO050").show();
            $("#RevisionOlorFDO035").show();//Muestra revision de olor a formol
            // $("#ProcesoDescarga").none();
        });
        $("#OlorFormolNo").click(function() {
            $("#PositivaCSO050").hide();
            $("#RevisionOlorFDO035").hide();
            // $("#ProcesoDescarga").show();
        });

        $("#OlorFormolSi2").click(function() {
            $("#OlorFormolSigue").show();//Muestra revision de olor a formol
        });
        $("#OlorFormolNo2").click(function() {
            $("#OlorFormolSigue").hide();
        });

        // Paso 12
        $("#ProductoBrillanteSi").click(function() {
            $("#FiltroLukas").hide();
            $("#ProcesoDescarga").show();
        });
        $("#ProductoBrillanteNo").click(function() {
            $("#FiltroLukas").show();
            $("#ProcesoDescarga").hide();
        });
        
        // Paso 12
        /*$("#ProductoBrillante2Si").click(function() {
            $("#ProcesoDescargaFinal").show();
        });
        $("#ProductoBrillante2No").click(function() {
            $("#ProcesoDescargaFinal").hide();
        });*/
        
        // Paso 13
        $("#EquipoNFOSi").click(function() {
            $("#SuspendioAgitacion").show();
        });
        $("#EquipoNFONo").click(function() {
            $("#SuspendioAgitacion").hide();
        });

        // Paso 14
        $("#ProcesoDifSi").click(function() {
            $("#relavarReactor").show();
        });
        $("#ProcesoDifNo").click(function() {
            $("#relavarReactor").hide();
        });

        // Paso Previa
        $("#EnviarPrevia1Si").click(function() {
            $("#EnviarPrevia1No").prop("checked", false);
            $("#ProcesoPrevia").show();
        });
        $("#EnviarPrevia1No").click(function() {
            $("#EnviarPrevia1Si").prop("checked", false);
            $("#ProcesoPrevia").hide();
        });
        $("#AutorizaDescargaSi").click(function() {
            $("#ProcesoDescargaFinal").show();
        });
        $("#AutorizaDescargaNo").click(function() {
            $("#ProcesoDescargaFinal").hide();
        });

        //PREVIA 1
        $("#AjustarPrevia1").click(function() {

            if ($("#AjustarPrevia1").prop("checked")) {
                $("#AjustarPrevia1").val("1");
                $("#Previa2").show();
            } else {
                $("#AjustarPrevia1").val("0");
                $("#Previa2").hide();
            }
            $('#PreviaConforme1').prop("checked",false);
            $("#PreviaConforme1").val("0");
            $('#PreviaNoConforme1').prop("checked",false);
            $("#PreviaNoConforme1").val("0");
        });

        $("#PreviaConforme1").click(function() {
            if ($("#PreviaConforme1").prop("checked")) {
                $("#PreviaConforme1").val("1");
                $("#Previa2").hide();
            } else {
                $("#PreviaConforme1").val("0");
            }
            $('#AjustarPrevia1').prop("checked",false);
            $("#AjustarPrevia1").val("0");
            $('#PreviaNoConforme1').prop("checked",false);
            $("#PreviaNoConforme1").val("0");
        });

        $("#PreviaNoConforme1").click(function() {
            if ($("#PreviaNoConforme1").prop("checked")) {
                $("#PreviaNoConforme1").val("1");
                $("#Previa2").show();
            } else {
                $("#PreviaNoConforme1").val("0");
                $("#Previa2").hide();
            }
            $('#PreviaConforme1').prop("checked",false);
            $("#PreviaConforme1").val("0");
            $('#AjustarPrevia1').prop("checked",false);
            $("#AjustarPrevia1").val("0");
        });

        //PREVIA 2
        $("#AjustarPrevia2").click(function() {

            if ($("#AjustarPrevia2").prop("checked")) {
                $("#AjustarPrevia2").val("1");
            } else {
                $("#AjustarPrevia2").val("0");
            }
            $('#PreviaConforme2').prop("checked",false);
            $("#PreviaConforme2").val("0");
            $('#PreviaNoConforme2').prop("checked",false);
            $("#PreviaNoConforme2").val("0");
        });

        $("#PreviaConforme2").click(function() {
        if ($("#PreviaConforme2").prop("checked")) {
            $("#PreviaConforme2").val("1");
        } else {
            $("#PreviaConforme2").val("0");
        }
        $('#AjustarPrevia2').prop("checked",false);
        $("#AjustarPrevia2").val("0");
        $('#PreviaNoConforme2').prop("checked",false);
        $("#PreviaNoConforme2").val("0");
        });

        $("#PreviaNoConforme2").click(function() {
        if ($("#PreviaNoConforme2").prop("checked")) {
            $("#PreviaNoConforme2").val("1");
        } else {
            $("#PreviaNoConforme2").val("0");
        }
        $('#PreviaConforme2').prop("checked",false);
        $("#PreviaConforme2").val("0");
        $('#AjustarPrevia2').prop("checked",false);
        $("#AjustarPrevia2").val("0");
        });

        $("form").submit(function() {
            var solidosPreviaValue1 = $("#SolidosPrevia1").val();
            var phPrevia1Value = $("#phPrevia1").val();

            solidosPreviaValue1 = solidosPreviaValue1.replace(',', '.');
            phPrevia1Value = phPrevia1Value.replace(',', '.');

            $("#SolidosPrevia1").val(solidosPreviaValue1);
            $("#phPrevia1").val(phPrevia1Value);

        });

        $("form").submit(function() {
            var solidosPreviaValue2 = $("#SolidosPrevia2").val();
            var phPrevia2Value = $("#phPrevia2").val();

            solidosPreviaValue2 = solidosPreviaValue2.replace(',', '.');
            phPrevia2Value = phPrevia2Value.replace(',', '.');

            $("#SolidosPrevia2").val(solidosPreviaValue2);
            $("#phPrevia2").val(phPrevia2Value);

        });

    });
</script>
</body>
</html>