<?php
// connection classique la base de donnée
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'dbtest');
 
$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if($con === false)  die("erreur : " . mysqli_connect_error()); 

?>

<!-- Machi b darora t importer ga3 had les css o  les js  mais vu ana khdemt 3la un projet  kan khasni njib hado kamlin 
du coup dert copier coller o safé.
 
F la documentation officiel rak tekder tchof chno m7taj  ( 9rad fichier readme.txt)
--->
<html>
<head>
<script  src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="  crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css"/>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/jquery.dataTables.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/autofill/2.3.2/css/autoFill.dataTables.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.4/css/buttons.dataTables.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/colreorder/1.5.0/css/colReorder.dataTables.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedcolumns/3.2.5/css/fixedColumns.dataTables.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.4/css/fixedHeader.dataTables.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/keytable/2.5.0/css/keyTable.dataTables.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.2/css/responsive.dataTables.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/rowgroup/1.1.0/css/rowGroup.dataTables.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/rowreorder/1.2.4/css/rowReorder.dataTables.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/scroller/1.5.0/css/scroller.dataTables.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.2.6/css/select.dataTables.min.css"/>


<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/autofill/2.3.2/js/dataTables.autoFill.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.4/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.4/js/buttons.colVis.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.4/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.4/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.4/js/buttons.print.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/colreorder/1.5.0/js/dataTables.colReorder.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.5/js/dataTables.fixedColumns.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/fixedheader/3.1.4/js/dataTables.fixedHeader.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/keytable/2.5.0/js/dataTables.keyTable.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.2/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/rowgroup/1.1.0/js/dataTables.rowGroup.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/rowreorder/1.2.4/js/dataTables.rowReorder.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/scroller/1.5.0/js/dataTables.scroller.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/select/1.2.6/js/dataTables.select.min.js"></script>


</head>

<body>
<!-- Création d'un tableau classique  class (display) kayna par defaut f css dialo -->
<table id="table" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Poste</th>
                <th class="hide"> </th> <!-- Class "hide" pour cacher  had  la colonne gahdi tlkaha f css -->
                <th>Age</th>
                <th>Salaire</th>
            </tr>
        </thead>
        <tbody>
        <?php 
		/* requete 3adiya tatjib kolchi o tatafficher kolchi */
            $sql="select * from tab";
            $result = mysqli_query($con, $sql);
            
            while ($row = mysqli_fetch_array($result)) {
                echo '<tr><th> '.$row[1] .'</th>';
                echo '<th>'. $row[2] .'</th>';
                echo '<th class="hide">'. $row[3] .'</th>';
                echo '<th>'. $row[4] .'</th>';
                echo '<th>'. $row[5] .'$</th></tr>';
            }
            
            mysqli_free_result($result);
            mysqli_close($con);
        ?>         
        </tbody>
        <tfoot>
            <th > </th><th > </th><th > </th>
            <th> Somme actuel : <span class="somme_par_page"> </span> <br> Somme Total : <span class="somme_total">  </span> </th> 
        </tfoot>    
</table>  
      
<!-- infobull  wahed  l3iba dertha bach n afficher ga3 les details dial row  li clikit  3lih -->      
<div class="infobull"> 
    <div class="relative"> 
        <div class="conteneur"> </div>
			<!-- Button dial bootstrap  pour fermer rak deja nta  3arfo-->
        <button type="button" class="close" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
    </div>
</div>

<div id="keep_data"> </div>


</body>
</html>
<script>
$(document).ready(function() {

    // evenement d'une fonction pour  calculer la somme  (hadi khassa b had datatable pour faire la somme )
    $.fn.dataTable.Api.register( 'column().data().sum()', function () {
        return this.reduce( function (a, b) {
        var x = parseFloat( a ) || 0;
        var y = parseFloat( b ) || 0;
        return (x + y).toFixed(2); // toFixed : hadi kayna dial javascript pure  pour limiter le nombre decimal f 2 mora fassila
        } );
    } );

	// hadi c'est la DataTable o fiha ghadi telka bezaf dial twichyat
    var table = $('#table').DataTable({
        //1- button de  l'exportation:
		// t9der dir exportation en format excel , csv, pdf ..etc o  kolchi ghir b des options
		// ana dert hna csv b 7okmo howa  li kan metloub
        buttons: [
                {   
                    extend: 'csv', // hna type de fichier wach csv wla  excel ...etc
                    text: 'Exporter', // smiya li tban f button 
                    extension: '.csv', // extension  dial fichier li ghadi itelecharga
                    fieldSeparator: ";", 
                    exportOptions: {
                        modifier: {       page: 'current'      }, // hadi tatgolih exporti liya ghir dakchi li tanchof f tableau
                        columns: [0,1,3], // les colonnes exportés dans  le fichier ' hayedt rakem 2 ( grade ) hit 
										  // dert wahed l3ba f had option 'columnDefs' raha l teht
                    },
                    // renomer le fichier exportè
                    filename: function(){
                        var d = new Date(); // declaration dial date 
                        var n = d.getTime(); // date dial daba
                        return 'myfile' + n; 
                    },
                }
            ],
        // activer la recherche ( hna tadir une recherche  simple juste b had  searching : true)
        "searching": true,  
        //charger un ficher json qui contient l'ensemble des élements traduits (par defaut taykon anglais)
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
        },
        //Sauvegarder l'etat actuel du datatables 
		// (tkder tkhrej men browser o fach terje3 telkah fin khelitih par exemple dkhelti la page 2 f pagination taybka fiha)
        stateSave: true,   
        // l'affichage des differents composant   l : lengthMenu , f : filtred  ...etc
        "dom": '<lf<t>ipB>',
        // l'affichage par page   
        "lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "Tous"]],
        // Si on définie les objets comme suivant on doit  les  utilisés par tous 
		// b7al f  php fach tadir  fetch array tekder tkraha b  0,1,2 ..etc wla tjib 'id' ,'nom' ..etc
       "columns": [
            { "data": "nom" },
            { "data": "poste" },
            { "data" : "grade" },
            { "data": "age" },
            { "data": "Salaire" },
        ],
        // Utilisé les données de la colonne (exemple ajouter le grade a coté du poste)
		// hadi li hdert lik 3liha lfok ana cachit Colonne 'grade' o ajoutitha hda 'Poste'
        "columnDefs": [
            {
                "render": function ( data, type, row ) {
                    return data +' ('+ row['grade']+')';
                },
                "targets": 1
            },
        ],
        
    });

	// fonction pour afficher la somme
    function somme() {
		// somme par page (hadi khedama b trigger li lfok )
        $(".somme_par_page").text(  table.column( 4, {page:'current'} ).data().sum() + " $"  );
        // somme total 
		$(".somme_total").text(  table.column( 4 ).data().sum() +" $" );
    }
    somme(); // calcul dés le démarage 
	
    $('#table')
        .on( 'order.dt',  function () { somme(); } ) // changement du calcul ila bedelti le tri
        .on( 'search.dt', function () { somme(); } )  // changement du calcul ila derti une recherche
        .on( 'page.dt',   function () { somme(); } )  // changement du calcul ila tbedlat 'page' f had le cas tay9esdo pagination
        .on( 'length.dt',   function () { somme(); } )  //  // changement du calcul ila bedelti f choix dial le nombre par page
        .DataTable();

	// ila clickiti  3la 'tr' li kayna f 'table' 		
    $('#table tbody').on('click', 'tr', function () {
        var data = table.row( this ).data(); // fonction dial datatable bach  ijib lik les données dial row selectioné
        $('.infobull').addClass("active"); // tan ajouter wahed class active l infobull bach iban wahed Modal 'chof css'
        $('.infobull .conteneur').text(''); // vider le conteneur (bach maybkach izid  données 3la données) ==>  hayedha o jereb ach ghadi iban lik
		// appened  tanjib les données li f variable data o tan affichihom 
        $('.infobull .conteneur').append( "<b> Le nom : </b>" + data['nom'] + "<br><b> Le poste : </b>" + data['poste'] + ' ( '+data['grade']  +" ) <br><b> Age : </b>"+data['age'] +"<br> <b>Salaire brut annuel :</b> "+ data['Salaire']);
    } );
    
	// Pour fermer dak modal
    $('button.close').click(function(){
        $('.infobull').removeClass("active");
    } ) ;
    
} );
</script>

<style>
div#table_wrapper {
    width: 80%;
    margin: 0 auto !important;
}
.infobull {
    position: absolute !important;
    background: rgba(88, 88, 88, 0.7);
    width: 100%;
    height: 100%;
    top: 0;
    display:none;
}
.infobull.active{
    display:block;
}
button.close {
    position: absolute;
    right: 5px;
    top: 5px;
}
.relative {
    position: relative !important;
    width: 25%;
    margin: 0 auto !important;
    margin-top: 200px !important;
    background: white;
    padding: 20px 30px;
    border-radius: 5px;
    box-shadow: 0px 0px 15px 0px rgba(27, 27, 27, 0.75);
}
.conteneur {
    padding: 20px 0 0 0;
}
.hide { display:none !important;}

table#table tbody tr:hover {
    cursor: pointer;
}
div.dt-buttons {
    position: relative;
    width: 100%;
    float: right;
    text-align: right;
}

@media  (max-width: 1200px) {
    .relative {     width:320px !important;   }
    div#table_wrapper {        width:90% !important;        }    
}
@media  (max-width: 500px) {
    .relative {        width:300px !important;    }
    div#table_wrapper {        width:95% !important;        }    
}
</style>