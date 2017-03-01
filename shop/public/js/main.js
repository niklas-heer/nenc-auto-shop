$(document).ready(function() {
	
    //Nur das erste Bild einblenden
    $.each($(".image"), function() {
        $(this).parent().children().css("display","none")
        $(this).parent().children().first().css("display","block");

    });
    
    var Audi = {
        '100' : '100',
        '200' : '200',
        '50' : '50',
        '80' : '80',
        '90' : '90',
        'A1' : 'A1',
        'A2' : 'A2',
        'A3' : 'A3',
        'A4' : 'A4',
        'A4 allroad' : 'A4 allroad',
        'A5' : 'A5',
        'A6' : 'A6',
        'A6 allroad' : 'A6 allroad',
        'A7' : 'A7',
        'A8' : 'A8',
        'Allroad' : 'Allroad',
        'Cabriolet' : 'Cabriolet',
        'Coupe' : 'Coupe',
        'Q2' : 'Q2',
        'Q3' : 'Q3',
        'Q5' : 'Q5',
        'Q7' : 'Q7',
        'QUATTRO' : 'QUATTRO',
        'R8' : 'R8',
        'RS' : 'RS',
        'RS Q3' : 'RS Q3',
        'RS2' : 'RS2',
        'RS3' : 'RS3',
        'RS4' : 'RS4',
        'RS5' : 'RS5',
        'RS6' : 'RS6',
        'RS7' : 'RS7',
        'RS7 Sportback' : 'RS7 Sportback',
        'S1' : 'S1',
        'S2' : 'S2',
        'S3' : 'S3',
        'S4' : 'S4',
        'S5' : 'S5',
        'S6' : 'S6',
        'S7' : 'S7',
        'S8' : 'S8',
        'SQ5' : 'SQ5',
        'SQ7' : 'SQ7',
        'TT' : 'TT',
        'TT RS' : 'TT RS',
        'TTS' : 'TTS',
        'V8' : 'V8',
        'Sonstige' : 'Sonstige'
    };
    var BMW = {
        '114' : '114',
        '116' : '116',
        '118' : '118',
        '120' : '120',
        '123' : '123',
        '125' : '125',
        '130' : '130',
        '135' : '135',
        '140' : '140',
        '2002' : '2002',
        '214' : '214',
        '216' : '216',
        '218' : '218',
        '220' : '220',
        '225' : '225',
        '228' : '228',
        '230' : '230',
        '235 ' : '235 ',
        '240' : '240',
        '315' : '315',
        '316' : '316',
        '318' : '318',
        '320' : '320',
        '323' : '323',
        '324' : '324',
        '325' : '325',
        '328' : '328',
        '330' : '330',
        '335' : '335',
        '340' : '340',
        'Active Hybrid 3' : 'Active Hybrid 3',
        '418' : '418',
        '420' : '420',
        '425' : '425',
        '428' : '428',
        '430' : '430',
        '435' : '435',
        '440' : '440',
        '518' : '518',
        '520' : '520',
        '523' : '523',
        '524' : '524',
        '525' : '525',
        '528' : '528',
        '530' : '530',
        '535' : '535',
        '540' : '540',
        '545' : '545',
        '550' : '550',
        'Active Hybrid 5' : 'Active Hybrid 5',
        '628' : '628',
        '630' : '630',
        '633' : '633',
        '635' : '635',
        '640' : '640',
        '645' : '645',
        '650' : '650',
        '725' : '725',
        '728' : '728',
        '730' : '730',
        '732' : '732',
        '735' : '735',
        '740' : '740',
        '745' : '745',
        '750' : '750',
        '760' : '760',
        'Active Hybrid 7' : 'Active Hybrid 7',
        '830' : '830',
        '840' : '840',
        '850' : '850',
        'i3' : 'i3',
        'i8' : 'i8',
        '1er M Coupé' : '1er M Coupé',
        'M2' : 'M2',
        'M3' : 'M3',
        'M4' : 'M4',
        'M5' : 'M5',
        'M6' : 'M6',
        'M1' : 'M1',
        'X1' : 'X1',
        'X3' : 'X3',
        'X4' : 'X4',
        'X4 M' : 'X4 M',
        'X5' : 'X5',
        'X5 M' : 'X5 M',
        'X6' : 'X6',
        'X6 M' : 'X6 M',
        'Z1' : 'Z1',
        'Z3' : 'Z3',
        'Z3 M' : 'Z3 M',
        'Z4' : 'Z4',
        'Z4 M' : 'Z4 M',
        'Z8' : 'Z8'
    };
    var MercedesBenz = {
        '170' : '170',
        '180' : '180',
        '190' : '190',
        '200' : '200',
        '208' : '208',
        '210/310' : '210/310',
        '220' : '220',
        '230' : '230',
        '240' : '240',
        '250' : '250',
        '260' : '260',
        '270' : '270',
        '280' : '280',
        '300' : '300',
        '308' : '308',
        '320' : '320',
        '350' : '350',
        '380' : '380',
        '400' : '400',
        '416' : '416',
        '420' : '420',
        '450' : '450',
        '500' : '500',
        '560' : '560',
        '600' : '600',
        'A 140' : 'A 140',
        'A 150' : 'A 150',
        'A 160' : 'A 160',
        'A 170' : 'A 170',
        'A 180' : 'A 180',
        'A 190' : 'A 190',
        'A 200' : 'A 200',
        'A 210' : 'A 210',
        'A 220' : 'A 220',
        'A 250' : 'A 250',
        'A 45 AMG' : 'A 45 AMG',
        'Actros' : 'Actros',
        'AMG GT' : 'AMG GT',
        'Atego' : 'Atego',
        'B 150' : 'B 150',
        'B 160' : 'B 160',
        'B 170' : 'B 170',
        'B 180' : 'B 180',
        'B 200' : 'B 200',
        'B 220' : 'B 220',
        'B 250' : 'B 250',
        'B Electric Drive' : 'B Electric Drive',
        'C 160' : 'C 160',
        'C 180' : 'C 180',
        'C 200' : 'C 200',
        'C 220' : 'C 220',
        'C 230' : 'C 230',
        'C 240' : 'C 240',
        'C 250' : 'C 250',
        'C 270' : 'C 270',
        'C 280' : 'C 280',
        'C 30 AMG' : 'C 30 AMG',
        'C 300' : 'C 300',
        'C 32 AMG' : 'C 32 AMG',
        'C 320' : 'C 320',
        'C 350' : 'C 350',
        'C 36 AMG' : 'C 36 AMG',
        'C 400' : 'C 400',
        'C 43 AMG' : 'C 43 AMG',
        'C 450' : 'C 450',
        'C 55 AMG' : 'C 55 AMG',
        'C 63 AMG' : 'C 63 AMG',
        'CE 200' : 'CE 200',
        'CE 220' : 'CE 220',
        'CE 230' : 'CE 230',
        'CE 280' : 'CE 280',
        'CE 300' : 'CE 300',
        'Citan' : 'Citan',
        'CL' : 'CL',
        'CL 160' : 'CL 160',
        'CL 180' : 'CL 180',
        'CL 200' : 'CL 200',
        'CL 220' : 'CL 220',
        'CL 230' : 'CL 230',
        'CL 420' : 'CL 420',
        'CL 500' : 'CL 500',
        'CL 55 AMG' : 'CL 55 AMG',
        'CL 600' : 'CL 600',
        'CL 63 AMG' : 'CL 63 AMG',
        'CL 65 AMG' : 'CL 65 AMG',
        'CLA 180' : 'CLA 180',
        'CLA 200' : 'CLA 200',
        'CLA 220' : 'CLA 220',
        'CLA 250' : 'CLA 250',
        'CLA 45 AMG' : 'CLA 45 AMG',
        'CLC' : 'CLC',
        'CLK' : 'CLK',
        'CLK 200' : 'CLK 200',
        'CLK 220' : 'CLK 220',
        'CLK 230' : 'CLK 230',
        'CLK 240' : 'CLK 240',
        'CLK 270' : 'CLK 270',
        'CLK 280' : 'CLK 280',
        'CLK 320' : 'CLK 320',
        'CLK 350' : 'CLK 350',
        'CLK 430' : 'CLK 430',
        'CLK 500' : 'CLK 500',
        'CLK 55 AMG' : 'CLK 55 AMG',
        'CLK 63 AMG' : 'CLK 63 AMG',
        'CLS' : 'CLS',
        'CLS 220' : 'CLS 220',
        'CLS 250' : 'CLS 250',
        'CLS 280' : 'CLS 280',
        'CLS 300' : 'CLS 300',
        'CLS 320' : 'CLS 320',
        'CLS 350' : 'CLS 350',
        'CLS 400' : 'CLS 400',
        'CLS 500' : 'CLS 500',
        'CLS 55 AMG' : 'CLS 55 AMG',
        'CLS 63 AMG' : 'CLS 63 AMG',
        'E 200' : 'E 200',
        'E 220' : 'E 220',
        'E 230' : 'E 230',
        'E 240' : 'E 240',
        'E 250' : 'E 250',
        'E 260' : 'E 260',
        'E 270' : 'E 270',
        'E 280' : 'E 280',
        'E 290' : 'E 290',
        'E 300' : 'E 300',
        'E 320' : 'E 320',
        'E 350' : 'E 350',
        'E 36 AMG' : 'E 36 AMG',
        'E 400' : 'E 400',
        'E 420' : 'E 420',
        'E 43 AMG' : 'E 43 AMG',
        'E 430' : 'E 430',
        'E 50 AMG' : 'E 50 AMG',
        'E 500' : 'E 500',
        'E 55 AMG' : 'E 55 AMG',
        'E 550' : 'E 550',
        'E 60 AMG' : 'E 60 AMG',
        'E 63 AMG' : 'E 63 AMG',
        'G' : 'G',
        'G 230' : 'G 230',
        'G 240' : 'G 240',
        'G 250' : 'G 250',
        'G 270' : 'G 270',
        'G 280' : 'G 280',
        'G 290' : 'G 290',
        'G 300' : 'G 300',
        'G 320' : 'G 320',
        'G 350' : 'G 350',
        'G 400' : 'G 400',
        'G 500' : 'G 500',
        'G 55 AMG' : 'G 55 AMG',
        'G 63 AMG' : 'G 63 AMG',
        'G 65 AMG' : 'G 65 AMG',
        'GL 320' : 'GL 320',
        'GL 350' : 'GL 350',
        'GL 400' : 'GL 400',
        'GL 420' : 'GL 420',
        'GL 450' : 'GL 450',
        'GL 500' : 'GL 500',
        'GL 55 AMG' : 'GL 55 AMG',
        'GL 63 AMG' : 'GL 63 AMG',
        'GLA 180' : 'GLA 180',
        'GLA 200' : 'GLA 200',
        'GLA 220' : 'GLA 220',
        'GLA 250' : 'GLA 250',
        'GLA 45 AMG' : 'GLA 45 AMG',
        'GLC 220' : 'GLC 220',
        'GLC 250' : 'GLC 250',
        'GLC 350' : 'GLC 350',
        'GLC 43 AMG' : 'GLC 43 AMG',
        'GLE 250' : 'GLE 250',
        'GLE 350' : 'GLE 350',
        'GLE 400' : 'GLE 400',
        'GLE 43 AMG' : 'GLE 43 AMG',
        'GLE 450' : 'GLE 450',
        'GLE 500' : 'GLE 500',
        'GLE 63 AMG' : 'GLE 63 AMG',
        'GLK 200' : 'GLK 200',
        'GLK 220' : 'GLK 220',
        'GLK 250' : 'GLK 250',
        'GLK 280' : 'GLK 280',
        'GLK 300' : 'GLK 300',
        'GLK 320' : 'GLK 320',
        'GLK 350' : 'GLK 350',
        'GLS 350' : 'GLS 350',
        'GLS 400' : 'GLS 400',
        'GLS 500' : 'GLS 500',
        'GLS 63 AMG' : 'GLS 63 AMG',
        'LKW/TRUCKS' : 'LKW/TRUCKS',
        'ML 230' : 'ML 230',
        'ML 250' : 'ML 250',
        'ML 270' : 'ML 270',
        'ML 280' : 'ML 280',
        'ML 300' : 'ML 300',
        'ML 320' : 'ML 320',
        'ML 350' : 'ML 350',
        'ML 400' : 'ML 400',
        'ML 420' : 'ML 420',
        'ML 430' : 'ML 430',
        'ML 450' : 'ML 450',
        'ML 500' : 'ML 500',
        'ML 55 AMG' : 'ML 55 AMG',
        'ML 63 AMG' : 'ML 63 AMG',
        'MB 100' : 'MB 100',
        'R 280' : 'R 280',
        'R 300' : 'R 300',
        'R 320' : 'R 320',
        'R 350' : 'R 350',
        'R 500' : 'R 500',
        'R 63 AMG' : 'R 63 AMG',
        'S 250' : 'S 250',
        'S 260' : 'S 260',
        'S 280' : 'S 280',
        'S 300' : 'S 300',
        'S 320' : 'S 320',
        'S 350' : 'S 350',
        'S 400' : 'S 400',
        'S 420' : 'S 420',
        'S 430' : 'S 430',
        'S 450' : 'S 450',
        'S 500' : 'S 500',
        'S 55 AMG' : 'S 55 AMG',
        'S 550' : 'S 550',
        'S 560' : 'S 560',
        'S 600' : 'S 600',
        'S 63 AMG' : 'S 63 AMG',
        'S 65 AMG' : 'S 65 AMG',
        'SL 230' : 'SL 230',
        'SL 250' : 'SL 250',
        'SL 280' : 'SL 280',
        'SL 300' : 'SL 300',
        'SL 320' : 'SL 320',
        'SL 350' : 'SL 350',
        'SL 380' : 'SL 380',
        'SL 400' : 'SL 400',
        'SL 420' : 'SL 420',
        'SL 450' : 'SL 450',
        'SL 500' : 'SL 500',
        'SL 55 AMG' : 'SL 55 AMG',
        'SL 560' : 'SL 560',
        'SL 60 AMG' : 'SL 60 AMG',
        'SL 600' : 'SL 600',
        'SL 63 AMG' : 'SL 63 AMG',
        'SL 65 AMG' : 'SL 65 AMG',
        'SL 70 AMG' : 'SL 70 AMG',
        'SL 73 AMG' : 'SL 73 AMG',
        'SLC 180' : 'SLC 180',
        'SLC 200' : 'SLC 200',
        'SLC 250' : 'SLC 250',
        'SLC 300' : 'SLC 300',
        'SLC 43 AMG' : 'SLC 43 AMG',
        'SLK' : 'SLK',
        'SLK 200' : 'SLK 200',
        'SLK 230' : 'SLK 230',
        'SLK 250' : 'SLK 250',
        'SLK 280' : 'SLK 280',
        'SLK 300' : 'SLK 300',
        'SLK 32 AMG' : 'SLK 32 AMG',
        'SLK 320' : 'SLK 320',
        'SLK 350' : 'SLK 350',
        'SLK 55 AMG' : 'SLK 55 AMG',
        'SLR' : 'SLR',
        'SLS' : 'SLS',
        'Sprinter' : 'Sprinter',
        'T1' : 'T1',
        'T2' : 'T2',
        'V' : 'V',
        'V 200' : 'V 200',
        'V 220' : 'V 220',
        'V 230' : 'V 230',
        'V 250' : 'V 250',
        'V 280' : 'V 280',
        'Vaneo' : 'Vaneo',
        'Vario' : 'Vario',
        'Viano' : 'Viano',
        'Vito' : 'Vito'
    };
    var Opel = {
        'Adam' : 'Adam',
        'Agila' : 'Agila',
        'Ampera' : 'Ampera',
        'Antara' : 'Antara',
        'Arena' : 'Arena',
        'Ascona' : 'Ascona',
        'Astra' : 'Astra',
        'Calibra' : 'Calibra',
        'Campo' : 'Campo',
        'Cascada' : 'Cascada',
        'Combo' : 'Combo',
        'Commodore' : 'Commodore',
        'Corsa' : 'Corsa',
        'Diplomat' : 'Diplomat',
        'Frontera' : 'Frontera',
        'GT' : 'GT',
        'Insignia' : 'Insignia',
        'Kadett' : 'Kadett',
        'Karl' : 'Karl',
        'Manta' : 'Manta',
        'Meriva' : 'Meriva',
        'Mokka' : 'Mokka',
        'Monterey' : 'Monterey',
        'Monza' : 'Monza',
        'Movano' : 'Movano',
        'Omega' : 'Omega',
        'Pick Up Sportscap' : 'Pick Up Sportscap',
        'Rekord' : 'Rekord',
        'Senator' : 'Senator',
        'Signum' : 'Signum',
        'Sintra' : 'Sintra',
        'Speedster' : 'Speedster',
        'Tigra' : 'Tigra',
        'Vectra' : 'Vectra',
        'Vivaro' : 'Vivaro',
        'Zafira' : 'Zafira',
        'Zafira Tourer' : 'Zafira Tourer'
    };
    var Porsche = {
        '356' : '356',
        '550' : '550',
        '911' : '911',
        '930' : '930',
        '964' : '964',
        '991' : '991',
        '993' : '993',
        '996' : '996',
        '997' : '997',
        '912' : '912',
        '914' : '914',
        '918' : '918',
        '924' : '924',
        '928' : '928',
        '944' : '944',
        '959' : '959',
        '962' : '962',
        '968' : '968',
        'Boxster' : 'Boxster',
        'Carrera GT' : 'Carrera GT',
        'Cayenne' : 'Cayenne',
        'Cayman' : 'Cayman',
        'Macan' : 'Macan',
        'Panamera' : 'Panamera',
        'Targa' : 'Targa'
    };
    var Volkswagen = {
        '181' : '181',
        'Amarok' : 'Amarok',
        'Anfibio' : 'Anfibio',
        'Beetle' : 'Beetle',
        'Bora' : 'Bora',
        'Buggy' : 'Buggy',
        'Bus' : 'Bus',
        'Caddy' : 'Caddy',
        'CC' : 'CC',
        'Coccinelle' : 'Coccinelle',
        'Corrado' : 'Corrado',
        'Crafter' : 'Crafter',
        'Cross Touran' : 'Cross Touran',
        'Derby' : 'Derby',
        'Eos' : 'Eos',
        'Escarabajo' : 'Escarabajo',
        'Fox' : 'Fox',
        'Cross Golf' : 'Cross Golf',
        'Golf' : 'Golf',
        'Golf Cabriolet' : 'Golf Cabriolet',
        'Golf GTI' : 'Golf GTI',
        'Golf Plus' : 'Golf Plus',
        'Golf Sportsvan' : 'Golf Sportsvan',
        'Golf Variant' : 'Golf Variant',
        'Iltis' : 'Iltis',
        'Jetta' : 'Jetta',
        'Karmann Ghia' : 'Karmann Ghia',
        'Käfer' : 'Käfer',
        'L80' : 'L80',
        'LT' : 'LT',
        'Lupo' : 'Lupo',
        'Maggiolino' : 'Maggiolino',
        'New Beetle' : 'New Beetle',
        'Passat' : 'Passat',
        'Passat Alltrack' : 'Passat Alltrack',
        'Passat CC' : 'Passat CC',
        'Passat Variant' : 'Passat Variant',
        'Phaeton' : 'Phaeton',
        'Pointer' : 'Pointer',
        'Polo' : 'Polo',
        'Polo Cross' : 'Polo Cross',
        'Polo GTI' : 'Polo GTI',
        'Polo Plus' : 'Polo Plus',
        'Polo R WRC' : 'Polo R WRC',
        'Polo Sedan' : 'Polo Sedan',
        'Polo Variant' : 'Polo Variant',
        'Routan' : 'Routan',
        'Santana' : 'Santana',
        'Scirocco' : 'Scirocco',
        'Sharan' : 'Sharan',
        'T1' : 'T1',
        'T2' : 'T2',
        'T3' : 'T3',
        'T3 Blue Star' : 'T3 Blue Star',
        'T3 California' : 'T3 California',
        'T3 Caravelle' : 'T3 Caravelle',
        'T3 Kombi' : 'T3 Kombi',
        'T3 Multivan' : 'T3 Multivan',
        'T3 White Star' : 'T3 White Star',
        'T4' : 'T4',
        'T4 Allstar' : 'T4 Allstar',
        'T4 California' : 'T4 California',
        'T4 Caravelle' : 'T4 Caravelle',
        'T4 Kombi' : 'T4 Kombi',
        'T4 Multivan' : 'T4 Multivan',
        'T5' : 'T5',
        'T5 California' : 'T5 California',
        'T5 Caravelle' : 'T5 Caravelle',
        'T5 Kombi' : 'T5 Kombi',
        'T5 Multivan' : 'T5 Multivan',
        'T5 Shuttle' : 'T5 Shuttle',
        'T6 California' : 'T6 California',
        'T6 Caravelle' : 'T6 Caravelle',
        'T6 Multivan' : 'T6 Multivan',
        'T6 Transporter' : 'T6 Transporter',
        'Taro' : 'Taro',
        'Tiguan' : 'Tiguan',
        'Touareg' : 'Touareg',
        'Touran' : 'Touran',
        'Transporter' : 'Transporter',
        'up!' : 'up!',
        'Vento' : 'Vento',
        'XL1' : 'XL1'
    };
        
    $.each(Audi, function(val, text) {
        $( "#model" ).append(
            $('<option></option>').val(val).html(text)
        );
    });

    
    $("#brand").change(function(){
        
        var brand = $( "#brand option:selected" ).text();
        
        switch (brand) {
            case "Audi":
                myOptions = Audi;
                break;
            case "BMW":
                myOptions = BMW;
                break;
            case "Mercedes-Benz":
                myOptions = MercedesBenz;
                break;
            case "Opel":
                myOptions = Opel;
                break;
            case "Porsche":
                myOptions = Porsche;
                break;
            case "Volkswagen":
                myOptions = Volkswagen;
                break;
            default:
                console.warn("Fehler! Default Case Switch statement (main.js)");
        }
        
        //Alle options aus der Selekt Box löschen.
        $( "#model" ).empty();
        
        //Selekt Box mit Optionen initialisieren
        $.each(myOptions, function(val, text) {
            $( "#model" ).append(
                $('<option></option>').val(val).html(text)
            );
        });
    });
});