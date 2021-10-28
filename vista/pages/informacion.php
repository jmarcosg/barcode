<?php
$titulo = "Información de Codigos";
include_once '../estructura/header.php';
?>

<div class="container">
  <div class="accordion mt-3" id="accordionBarcodes">
    <div class="accordion-item">
      <h2 class="accordion-header" id="heading1">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
          <b>Code 11</b>
        </button>
      </h2>
      <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionBarcodes">
        <div class="accordion-body">
          <strong>Code 11, o también conocido como USD-8,</strong> es una simbologia discreta y de alta densidad usada principalmente para el etiquetado de equipamiento de telecomunicaciones. Fue inventado por David Allais en Intermec Corporation en el año 1977.

          <h5 class="mt-3">Estructura del Símbolo</h5>
          <ul>
            El símbolo está compuesto por los siguentes elementos:
            <li>Caracter de inicio</li>
            <li>Caracteres símbolo que representan data</li>
            <li>Sumatoria opcional de digitos</li>
            <li>Caracter de finalizado</li>
          </ul>
          <p>El primer y último elemento de cada caracter es una barra. Un uni-modulo de interespaciado es agregado para separar un caracter de otro.</p>

          <h5 class="mt-3">Conjunto de caracteres</h5>
          <p>Esta simbología soporta caracteres numéricos (0-9) y un caracter de tipo guión medio (-). Code 11 es un homonimo debido a sus 11 caracteres.</p>

          <h5 class="mt-3">Sumatoria de caracteres</h5>
          <p>Debido a la densidad natural de Code 11, imprimir imperfecciones puede causar que scanner mal interpreten caracteres. Para compensar esta limitación, Code 11 soporta el uso de uno o dos caracteres de sumatoria. Para el ingreso de data menor a 10 caracteres numéricos, se utiliza un solo caracter de sumatoria, y para 10 o más digitos se utilizan dos caracteres de sumatoria. El primer caracter esta basado en el algoritmo modulo-11 y el segundo en el algoritmo modulo-9.</p>
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="heading2">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
          <b>Code 39</b>
        </button>
      </h2>
      <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionBarcodes">
        <div class="accordion-body">
          <p><strong>Code 39</strong> fue desarrollado en 1974 por David Allais y Raymond Stevens, trabajando en ese entonces para Interface Mechanisms Inc. (hoy, Intermec Corporation). Fue la primer simbología de código de barras en usar caracteres alfanuméricos. Variaciones de Code 39 han sido utilizadas extensivamente en multiples industrias, particularmente en el ejercito de EEUU como un componente del sistema "Aplicaciones de Logística de Marcado y Lectura Automatizada de Símbolos" (LOGMARS).</p>

          <p>Code 39 está definido en la norma ISO/IEC 16388 <i>Information technology - Automatic identification and data capture techniques - Code 39 bar code symbology specification.</i></p>

          <h5 class="mt-3">Estructura del Símbolo</h5>
          <ul>
            El símbolo está compuesto por los siguentes elementos:
            <li>Zona de inicio</li>
            <li>Caracter de inicio (usualmente un asterisco (*))</li>
            <li>Uno o más pares de caracteres símbolos que representan data (incluyendo un dígito de verificación opcional)</li>
            <li>Caracter de finalizado (usualmente un asterisco (*))</li>
            <li>Zona de espaciado</li>
            <li>Espaciado entre caracteres (un módulo de ancho) que separan caracteres entre sí dentro del símbolo</li>
          </ul>
          <p>Cada Code 39 - Regular, es representado por nueve elementos: 5 barras y 4 espacios, tres de los cuales son anchos y seis son angostos. (El nombre "Code 39" era originalmente "Code 3 of 9" que derivava del hecho que 3 de 9 elementos en cada Code 39 eran siempre anchos.</p>

          <h5 class="mt-3">Conjunto de caracteres</h5>
          <ul>
            Esta simbología soporta los siguientes caracteres alfanuméricos:
            <li>Digitos (0-9)</li>
            <li>Letras (A-Z)</li>
            <li>Los siguientes símbolos:</li>
            <ul>
              <li>%</li>
              <li>+</li>
              <li>$</li>
              <li>/</li>
              <li>.</li>
              <li>-</li>
            </ul>
            <li>Caracteres en blanco</li>
          </ul>
          <p>Si se necesitan caracteres adicionales, el Code 39 - Full ASCII habilita la codificación de los 128 caracteres del conjunto ASCII.</p>

          <h5 class="mt-3">Dígito de verificación</h5>
          <p>Code 39 - Regular permite la utilización de un dígito opcional de verificación basado en el algoritmo modulo-43.</p>

          <h5 class="mt-3">Dimensiones del símbolo</h5>
          <p>La altura mínima recomendada para el escaneo manural es de 5.0mm o 15% del ancho del símbolo (excluyendo las zonas de espaciado), dependiendo de cuál sea más grande. Las zonas de espaciado deben ser al menos 10X del ancho, donde "X" es la dimensión actual.</p>

          <h5 class="mt-3">Densidad</h5>
          <p>Code 39 - Regular tiene una densidad moderada de caracteres. Para impresoras laser, la máxima densidad de caracteres es 9.4cpi (caracteres por pulgada).</p>
          <p>Si el espacio disponible de impresión es un problema y el mensaje codificado contiene solamente números, el mismo puede ser codificado en "Interleaved 2 of 5 (I25)", el cual utiliza la mitad del espacio que requiere Code 39.</p>
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="heading3">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
          <b>Code 93</b>
        </button>
      </h2>
      <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionBarcodes">
        <div class="accordion-body">
          <strong>Code 93</strong> es una simbología alfanumérica de longitud variable que fue desarrollada en 1982 y es matenida por Intermec Corporation. Combina características de Code 39 - Full ASCII y de GS1-128 en un solo lenguaje de código de barras que tiene una densidad muy alta.

          <p>Code 93 se define en AIM-BC5-2000 <i>Uniform Symbology Specification - Code 93.</i></p>

          <h5 class="mt-3">Estructura del Símbolo</h5>
          <ul>
            El símbolo está compuesto por los siguentes elementos:
            <li>Zona de inicio con espaciado</li>
            <li>Caracter de inicio</li>
            <li>Caracteres ingresados que reprensentan la información</li>
            <li>Dos dígitos de verificación</li>
            <li>Caracter de finalizado</li>
            <li>Zona de finalizado con espaciado</li>
          </ul>
          <p>Cada caracter de data en un símbolo de Code 93 esta compuesto de seis elementos: 3 barras y 3 espacios. Las barras pueden ser de uno a tres módulos de ancho y los espacios pueden ser de uno a cuatro módulos de ancho. Estos seis elementos son dispersados en un espacio que contiene nueve modulos de ancho. El nombre "Code 93" deriva del hecho de que cada caracter consiste de nueve módulos que son ordenados en tres barras más los espacios adyacentes.</p>

          <h5 class="mt-3">Conjunto de caracteres</h5>
          <ul>
            Esta simbología soporta los siguientes caracteres alfanuméricos:
            <li>Digitos (0-9)</li>
            <li>Letras (A-Z)</li>
            <li>Los siguientes símbolos:</li>
            <ul>
              <li>%</li>
              <li>+</li>
              <li>$</li>
              <li>/</li>
              <li>.</li>
              <li>-</li>
            </ul>
            <li>Caracteres en blanco</li>
            <li>Cuatro caracteres de modificación</li>
          </ul>
          <p>Los caracteres de modificación son usados cuando se lo necesite para codificar otros caracteres del conjunto ASCII.</p>

          <h5 class="mt-3">Dígito de verificación</h5>
          <p>Code 93 contiene dos dígitos de verificación obligatorios que preceden inmendiatamente al caracter final. Estos dígitos de verificación estan basados en el algortimo modulo-47.</p>

          <h5 class="mt-3">Dimensiones del símbolo</h5>
          <p>La altura mínima recomendada para el escaneo del símbolo es 5.0mm o 15% del ancho del símbolo (excluyendo las zonas de espaciado), dependiendo de cual sea más grande. Las zonas de espaciado tienen que ser al menos de 10 módulos de ancho.</p>
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="heading4">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
          <b>Code 128</b>
        </button>
      </h2>
      <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionBarcodes">
        <div class="accordion-body">
          <strong>Code 128</strong> fue inventado en 1981 por Ted Williams de Laserlight Corporation para resolver el problema de representar caracteres alfanuméricos sin sacrificar la densidad del código de barras. Code 128 permite la codificación de todo el conjunto de caracteres ASCII, igual que Code 39 - Full ASCII. Adicionalmente, cuando codificamos solo números, Code 128 lo hace con mayor densidad que "Interleaved 2 of 5".

          <p>El uso más común de Code 128 es en ciertas etiquetas de empaquetado, definidas primeramente por GS1 en el estandar de códigos de barra GS1-128.</p>

          <p>Code 128 está definido en la norma ISO/IEC 15417 <i>Information technology - Automatic identification and data capture techniques - Code 128 bar code symbology specification.</i></p>

          <h5 class="mt-3">Estructura del Símbolo</h5>
          <ul>
            El símbolo está compuesto por los siguentes elementos:
            <li>Zona de inicio con espaciado</li>
            <li>Caracter de inicio</li>
            <li>Caracteres ingresados que reprensentan la información</li>
            <li>Caracter de verificación</li>
            <li>Caracter de finalizado</li>
            <li>Zona de finalizado con espaciado</li>
          </ul>
          <p><strong>Caracteres símbolo:</strong> La mayoría de simbología de códigos de barra imprimen barras y espacios de dos maneras (anchos y angostas), pero Code 128 usa cuatro grosores distintos, tal como la familia UPC/EAN lo hace. En cambio, mientras la familia UPC/EAN usa cuatro elementos (dos barras y dos espacios) por caracter, cada caracter Code 128 es representado por seis elementos (tres barras y tres espacios). Aunque esto representa un 50% de reducción de densidad de caracteres, Code 128 puede representar todo el conjunto ASCII. Además, a diferencia de UPC/EAN, Code 128 no está limitado a la codificación de números.</p>

          <p><strong>Caracter inicial:</strong> Code 128 tiene tres caracteres iniciales, uno por cada uno de los tres tipo de conjuntos de caracteres: 128A, 128B, 128C. El caracter inicial va a ser utilizado para cierto código de barras dependiendo de que caracteres necesiten ser codificados en esa parte del código de barras.</p>

          <h5 class="mt-3">Conjunto de caracteres</h5>
          <p>A pesar de que el conjunto Code 128 contiene solo 102 caracteres, esta simbología soporta todos el conjunto ASCII. Esto es posible porque Code 128 utiliza tres conjuntos diferentes de 102 caracteres: 128A, 128B, 128C. El conjunto por defecto que se utiliza por cada conjunto Code 128 es determinado por el caracter inicial. Aunque, es posible cambiar entre los diferentes conjuntos de caracteres y el uso de cualquier combinación de los mismos en un solo símbolo. Es por esto que Code 128 permite la mayor densidad posible de caracteres al codificar data.</p>

          <p>Los tres conjuntos de caracteres pueden ser resumidos de la siguiente manera:
            <ul>
              <li><strong>Conjunto 128A:</strong> incluye todos los valores numerícos (0-9), caracteres alfabeticos en mayúsculas (A-Z), símbolos de puntación, siete caracteres especiales y caracteres de "control" (valores ASCII (00-95))</li>
              <li><strong>Conjunto 128B:</strong> incluye todos los valores numerícos (0-9), caracteres alfabeticos en mayúsculas y minúsculas (A-Z, a-z), símbolos de puntación y siete caracteres especiales (valores ASCII (32-127))</li>
              <li><strong>Conjunto 128C:</strong> incluye todos los dígitos pares desde el 00 al 99 y tres caracteres especiales. Este conjunto es solamente numérico, pero cualquier caracter singular representa dos dígitos.</li>
            </ul>
          </p>

          <h5 class="mt-3">Dígito de verificación</h5>
          <p>Code 128 contiene un dígito de verificación obligatorio que esta badao en el algorítmo modulo-103. Este dígito aparece junto antes del último caracter de finalizado. No hay intrepretación para este último dígito que pueda ser leida por un ser humano.</p>

          <h5 class="mt-3">Dimensiones del símbolo</h5>
          <p>La altura mínima recomendada para el escaneo del símbolo es 5.0mm o 15% del ancho del símbolo (excluyendo las zonas de espaciado), dependiendo de cual sea más grande. Las zonas de espaciado tienen que ser al menos de 10 módulos de ancho.</p>

          <h5 class="mt-3">Caracteres especiales</h5>
          <p>Code 128 soporta los siguentes caracteres especiales:
            <ul>
              <li>FCN1</li>
              <li>FCN2</li>
              <li>FCN3</li>
              <li>FCN4</li>
            </ul>
          </p>

          <p>Estos caracteres ordenan al lector de códigos de barras el uso de operaciones especiales y aplicaciones especiales.</p>

          <h5 class="mt-3">GS1-128</h5>
          <p>GS1-128 (previamente nombrado UCC/EAN-128) es el nombre que se le otorga a los códigos de barras Code 128 que conforma los estandares GS1. Estos códigos de barras incluyen caracteres FCN1, identificadores de apliaciones, dígitos de verificación, espaciados y parentesís extra para la interpretación humana.</p>
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="heading5">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
          <b>Codabar</b>
        </button>
      </h2>
      <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionBarcodes">
        <div class="accordion-body">
          <p><strong>Codabar</strong> fue desarrollado originalmente a principios de los 1970s para ser utilizados en sistemas de etiquetado de artículos de tiendas. Aunque, luego de la Asociación de Mercaderes de Tiendas Nacionales (NRMA) seleccionaron otra simbología como estandar en 1975, Codabar fue promovido para ser utilizado en una variedad de aplicaciones que no fueran de tiendas tales como bibliotecas, empaquetado, acabado de fotografías y en la industria medicinal. Cómo Codabar no es tan versatil o confiable cómo otras simbologías, la tendencia desde los 1980s fue de dejar de lado Codabar y enfocarse en otras simbologías.</p>

          <p>Codabar se define en AIM-BC3-2000 <i>Uniform Symbology Specification - Codabar.</i></p>

          <p>Codabar también, a veces, es nombrado USD 4, Code 27, 2 of 7 Code o Monarch. Es conocido como NW-7 en Japón.</p>

          <h5 class="mt-3">Estructura del Símbolo</h5>
          <ul>
            El símbolo está compuesto por los siguentes elementos:
            <li>Zona de inicio con espaciado</li>
            <li>Caracter de inicio</li>
            <li>Caracteres ingresados que reprensentan la información (incluyendo un dígito de verificación opcional)</li>
            <li>Caracter de finalizado</li>
            <li>Zona de finalizado con espaciado</li>
          </ul>
          <p><strong>Caracteres símbolos:</strong> Cada caracter Codabar es representado por siete elementos: cuatro barras y tres espacios. De los siete elementos, dos o tres elementos son anchos y el resto son angostos. Al no tener una cantidad fija de elementos anchos, teorícamente pueden reducir la integridad de la información de los códigos de barras Codabar relativos a otras simbologías.</p>

          <p>Un cuarto espacio, llamado "espacio entre-caracter", separa cada caracter del código de barras del siguiente pero no es una parte de un caracter de un código de barras. El ancho de este espacio no es crítico y es usualmente configurado para ser identico al ancho de un espacio angosto.</p>

          <p><strong>Caracteres de inicio y finalizado:</strong> Cadabar tiene cuatro caracteres de inicio y finalizado, que son representados con las letras A, B, C y D. Cualquiera de estas letras puede ser utilizada tanto como caracter inicial, como caracter de finalizado. El caracter de inicio y finalizado no pueden ser iguales. No tener un patrón de caracteres de inicio y finalizado es otro factor que teorícamente puede reducir la integridad de la información.</p>

          <h5 class="mt-3">Conjunto de caracteres</h5>
          <ul>
            Esta simbología soporta los siguientes caracteres alfanuméricos:
            <li>Digitos (0-9)</li>
            <li>Letras (A-Z)</li>
            <li>Los siguientes símbolos:</li>
            <ul>
              <li>-</li>
              <li>$</li>
              <li>:</li>
              <li>/</li>
              <li>.</li>
              <li>+</li>
            </ul>
            <li>Cuatro caracteres alfabéticos: A, B, C y D</li>
          </ul>
          <p>Los cuatro caracteres alfabéticos son utilizados solamente en el comienzo y en el fin de la codificación. Por lo tnato, con excepción a los seis caracteres especiales, Codabar es una simbología solamente numérica como "Interleaved 2 of 5".</p>

          <h5 class="mt-3">Dígito de verificación</h5>
          <p>Codabar puede contener un dígito opcional de verificación basado en el algorítmo modulo-16. Este dígito aparece junto antes del último dígito.</p>

          <p>Como Codabar no tiene una cantidad establecida de espacios anchos por caracter, ni tiene un patrón establecido para los caracteres de inicio y fin, es menos segura que otras simbologías. La mayora de productores de códigos de barras recomiendan la utilización de "Code 39 - Full ASCII" o "Interleaved 2 of 5" en aplicaciones donde se considere utilizar Codabar.</p>

          <h5 class="mt-3">Densidad</h5>
          <p>Codabar no puede reprensentar informacion con la misma densidad que "Interleaved 2 of 5". Adicionalmente, Codabar no es mucho más denso que "Code 39", el cual tiene una significante ventaja al poder representar todo el conjunto ASCII. Esta es una de las razones por la cual se recomienda "Interleaved 2 of 5" en vez de Codabar en aplicaciones donde solamente se deba codificar información numérica.</p>

          <h5 class="mt-3">Dimensiones del símbolo</h5>
          <p>La altura mínima recomendada para el escaneo del símbolo es 5.0mm o 15% del ancho del símbolo (excluyendo las zonas de espaciado), dependiendo de cual sea más grande. Las zonas de espaciado tienen que ser al menos de 10 módulos de ancho.</p>

          <h5 class="mt-3">Variaciones</h5>
          <p><strong>Codabar tradicional:</strong> la versión original de Codabar hoy es conocida como "Traditional Codabar". Este difiere de Codabar en la tolerancia de caracteres iniciales y finales.</p>

          <p><strong>ABC Codabar:</strong> Símbolos Codabar pueden ser concatenados. Cuando se realiza esto, la variación es conocida como "ABC Codabar". En esta variación, si se utiliza la letra D como caracter final indica que el símbolo puede ser concatenedo con la información de un símbolo adyacente que comience con la letra D. El número de etiquetas que pueden ser concatenadas de esta manera, esta limitado solamente por el rango de lectura del escaner de códigos de barras.</p>
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="heading6">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
          <b>EAN/JAN-8</b>
        </button>
      </h2>
      <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionBarcodes">
        <div class="accordion-body">
          <p>El sistema de Numeración de Artículos Europeos <strong>(EAN)</strong> (también conocido como el Número de Artículos Internacionales) y el sistema de Numeración de Artículos Japoneses (JAN) sos miembros de la familia de códigos de barras UPC que fue desarrollado en los 1970s para la identificación automática de productos de tiendas.</p>

          <p>Las simbologías EAN y JAN son idénticas, excepto que JAN utiliza un código de país en el rango de 490-499 que indíca que el productor está registrado en Japón.</p>

          <p>EAN-8 es una versión más pequeña de EAN/JAN-13 que fue desarrollada para el uso de paquetes pequeños que no pudieran ser acomodados en EAN-13. Está codificado de la misma manera que EAN-13, excepto por tener solo cuatro dígitos en cada mitad a diferencia del EAN-13 que tiene seis.</p>

          <p>EAN-8 está definido en la norma ISO/IEC 15420 <i>Information technology - Automatic identification and data capture techniques - EAN/UPC bar code symbology specification.</i> La implementación GS1 esta definida en <i>GS1 General Specifications.</i></p>

          <h5 class="mt-3">Estructura del Símbolo</h5>
          <ul>
            El símbolo está compuesto por los siguentes elementos:
            <li>Zona de inicio con espaciado</li>
            <li>Patrón de barras para el caracter inicial</li>
            <li>Cuatro caracteres símbolo</li>
            <li>Patrón de barras para el caracter central</li>
            <li>Cuatro caracteres símbolo, incluyendo un dígito de verificación</li>
            <li>Patrón de barras para el caracter final</li>
            <li>Zona de finalizado con espaciado</li>
          </ul>
          <p>EAN-8 codifica siete dígitos de un mensaje numérico y un dígito de verificación, haciendo así un total de ocho digitos.</p>

          <p>La mayoría de simbologías de códigos de barras imprimen barras y espacios de dos grosores, pero con EAN, se utilizan cuatro grosores diferentes. Esto permite a cada caracter numérico ser representado con solo dos barras y dos espacios, que es el mínimo de módulos numéricos requerido por caracter de cualquier simbología.</p>

          <p>Aunque los códigos de barras EAN varían en longitud de mensajes, estas no son totalmente variables como lo son en otras simbologías.</p>

          <p><strong>Patrón de barras:</strong> son el inicio, final y centro de cada símbolo EAN.</p>

          <p>Los caracteres de inicio y fin son idénticos. Están compuestos de tres modulos:
            <ul>
              <li>Barra angosta</li>
              <li>Espacio angosto</li>
              <li>Barra angosta</li>
            </ul>
          </p>

          <p>El caracter central esta compuesto de cinco módulos:
            <ul>
              <li>Espacio angosto</li>
              <li>Barra angosta</li>
              <li>Espacio angosto</li>
              <li>Barra angosta</li>
              <li>Espacio angosto</li>
            </ul>
          </p>

          <p>Las barras para estos caracteres son más largas que las borras en el resto del símbolo y a veces son nombradas "barras de seguridad".</p>

          <h5 class="mt-3">Conjunto de caracteres</h5>>
          <p>Esta simbología soporta todos los caracteres númericos (0-9).</p>

          <h5 class="mt-3">Dígito de verificación</h5>
          <p>EAN-8 contiene un dígito de verificación que está basado en el algorítmo modulo-10.</p>

          <h5 class="mt-3">Densidad</h5>
          <p>Al tener cuatro tipo de anchos de impresiones para las barras y espacios en vez de dos, EAN ocupa la mitad de cantidad de barras y espacios relativos a "Interleaved 2 of 5" para representar cada caracter. Aunque, el uso de barras y espacios más anchos nulifican el ahorrado. "Interleaved 2 of 5" codifica información mucho más densa que EAN.</p>

          <h5 class="mt-3">Combinando EAN con otras simbologías</h5>
          <p>Como muchos productos comprados vienen convenientemente pre-etiquetados con códigos de barras EAN, se necesitaría un código de barras que pueda leerlos. Estos códigos de barras son usualmente producidos fotográficamente o con una impresora laser. Aunque, la mayoría de lectores de códigos de barras pueden discriminar automaticamente entre varías simbologías, es un muy sencillo combinar con otras simbologías para un espacio de producción otorgado.</p>

          <p>Si se tiene un lector de códigos de barras que puede discriminar automaticamente, se recomienda utilizar "Interleaved 2 of 5" o "Code 39" para usos hogareños. Como EAN utiliza una codificación numerica, "Interleaved 2 of 5" seria su sustituto de preferencia, ya que utiliza la mitad del espacio que "Code 39" requiere.</p>
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="heading7">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
          <b>EAN/JAN-13</b>
        </button>
      </h2>
      <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordionBarcodes">
        <div class="accordion-body">
          <p>El sistema de Numeración de Artículos Europeos <strong>(EAN)</strong> (también conocido como el Número de Artículos Internacionales) y el sistema de Numeración de Artículos Japoneses (JAN) sos miembros de la familia de códigos de barras UPC que fue desarrollado en los 1970s para la identificación automática de productos de tiendas. EAN-13 es utilizado al rededor del mundo para la identificación de productos de tiendas, incluso dentro de EEUU, donde los sistemas de escaneos en tiendas son obligados a leer EAN-13 desde 2005.</p>

          <p>Las simbologías EAN y JAN son idénticas, excepto que JAN utiliza un código de país en el rango de 490-499 que indíca que el productor está registrado en Japón.</p>

          <p>EAN-13 es un super-conjunto de UPC-A. lo cual significa que cualquier sistema que pueda leer EAN-13 puede leer UPC-A. Un símbolo UPC-A que fue creado en Estados Unidos puede ser transformado en un símbolo EAN-13 concatenandole un 0 al principio.</p>

          <p>EAN-13 está definido en la norma ISO/IEC 15420 <i>Information technology - Automatic identification and data capture techniques - EAN/UPC bar code symbology specification.</i> La implementación GS1 esta definida en <i>GS1 General Specifications.</i></p>

          <h5 class="mt-3">Estructura del Símbolo</h5>
          <ul>
            El símbolo está compuesto por los siguentes elementos:
            <li>Zona de inicio con espaciado</li>
            <li>Patrón de barras para el caracter inicial</li>
            <li>Seis caracteres símbolo</li>
            <li>Patrón de barras para el caracter central</li>
            <li>Seis caracteres símbolo, incluyendo un dígito de verificación</li>
            <li>Patrón de barras para el caracter final</li>
            <li>Zona de finalizado con espaciado</li>
          </ul>
          <p>EAN-13 codifica 12 dígitos de un mensaje numérico y un dígito de verificación, haciendo así un total de 13 dígitos.</p>

          <p>La mayoría de simbologías de códigos de barras imprimen barras y espacios de dos grosores, pero con EAN, se utilizan cuatro grosores diferentes. Esto permite a cada caracter numérico ser representado con solo dos barras y dos espacios, que es el mínimo de módulos numéricos requerido por caracter de cualquier simbología.</p>

          <p>Aunque los códigos de barras EAN varían en longitud de mensajes, estas no son totalmente variables como lo son en otras simbologías.</p>

          <p><strong>Patrón de barras:</strong> son el inicio, final y centro de cada símbolo EAN.</p>

          <p>Los caracteres de inicio y fin son idénticos. Están compuestos de tres modulos:
            <ul>
              <li>Barra angosta</li>
              <li>Espacio angosto</li>
              <li>Barra angosta</li>
            </ul>
          </p>

          <p>El caracter central esta compuesto de cinco módulos:
            <ul>
              <li>Espacio angosto</li>
              <li>Barra angosta</li>
              <li>Espacio angosto</li>
              <li>Barra angosta</li>
              <li>Espacio angosto</li>
            </ul>
          </p>

          <p>Las barras para estos caracteres son más largas que las borras en el resto del símbolo y a veces son nombradas "barras de seguridad".</p>

          <h5 class="mt-3">Conjunto de caracteres</h5>>
          <p>Esta simbología soporta todos los caracteres númericos (0-9).</p>

          <h5 class="mt-3">Dígito de verificación</h5>
          <p>EAN-13 contiene un dígito de verificación que está basado en el algorítmo modulo-10.</p>

          <h5 class="mt-3">Densidad</h5>
          <p>Al tener cuatro tipo de anchos de impresiones para las barras y espacios en vez de dos, EAN ocupa la mitad de cantidad de barras y espacios relativos a "Interleaved 2 of 5" para representar cada caracter. Aunque, el uso de barras y espacios más anchos nulifican el ahorrado. "Interleaved 2 of 5" codifica información mucho más densa que EAN.</p>

          <h5 class="mt-3">Símbolos añadidos</h5>
          <p>Dos dígitos (EAN-2) y cinco dígitos(EAN-5) </p>

          <h5 class="mt-3">Combinando EAN con otras simbologías</h5>
          <p>Como muchos productos comprados vienen convenientemente pre-etiquetados con códigos de barras EAN, se necesitaría un código de barras que pueda leerlos. Estos códigos de barras son usualmente producidos fotográficamente o con una impresora laser. Aunque, la mayoría de lectores de códigos de barras pueden discriminar automaticamente entre varías simbologías, es un muy sencillo combinar con otras simbologías para un espacio de producción otorgado.</p>

          <p>Si se tiene un lector de códigos de barras que puede discriminar automaticamente, se recomienda utilizar "Interleaved 2 of 5" o "Code 39" para usos hogareños. Como EAN utiliza una codificación numerica, "Interleaved 2 of 5" seria su sustituto de preferencia, ya que utiliza la mitad del espacio que "Code 39" requiere.</p>
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="heading8">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="true" aria-controls="collapse8">
          <b>Interleaved 2 of 5</b>
        </button>
      </h2>
      <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordionBarcodes">
        <div class="accordion-body">
          <p><strong>Interleaved 2 of 5</strong> es miembro de la familia de simbología "Code 2 of 5", la cual fue desarrollada en 1968. A veces se refiere a la misma como "ITF" y las bases de los formularios para la simbología "ITF-14" que es mundialmente utilizada para el envío y transporte de logística.</p>

          <p>Es usualmente utilizada en vez de 'Code 39 - Regular" porque los mensajes de los códigos de barras que contienen solamente números pueden ser codificados en "I25" ya que ocupa la mitad del espacio requerido para "Code 39".</p>

          <p>Interleaved 2 of 5 está definido en la norma ISO/IEC 16390 <i>Information technology - Automatic identification and data capture techniques - Interleaved 2 of 5 bar code symbology specification.</i> Para información acerca de la implementación GS1 de ITF-14, ver el documento<i>GS1 General Specifications.</i></p>

          <h5 class="mt-3">Estructura del Símbolo</h5>
          <ul>
            El símbolo está compuesto por los siguentes elementos:
            <li>Zona de inicio con espaciado</li>
            <li>Patrón de inicio (barra angosta, espacio angosto, barra angosta, espacio angosto)</li>
            <li>Uno o más pares de caracteres símbolos que representan información (incluyendo un dígito opcional de verificación)</li>
            <li>Patrón de finalizado (barra ancha, espacio angosto, barra angosta)</li>
            <li>Zona de inicio con espaciado</li>
          </ul>
          <p>Cada caracter codificado en "I25" es representado por cinco elementos: cinco barras, dos de las cuales son anchas y tres angostas. El nombre "Interleaved 2 of 5" proviene del entrelazado de patrones de barras y espacios que representan la individualidad de cada caractar dentro del símbolo: se representan los caracteres en pares, y cada 10 elementos, cinco barras reprensentan un caracter y cinco espacios entre ellos el siguiente caracter.</p>

          <p>Todos los mensajes codificados "I25" deben contener una cantidad par de dígitos. Por lo tanto, se concatenaría un 0 delante del mensaje codificado en cualquiera de las siguientes situaciones:
            <ul>
              <li>El mensaje a ser codificado tiene una cantidad impar de dígitos y el dígito de verificación no está en uso</li>
              <li>El mensaje a ser codificado tiene una cantidad par de dígitos y el dígito de verificación está en uso</li>
            </ul>
          </p>

          <p>"Interleaved 2 of 5" no contiene espacios entre-caracteres.</p>

          <h5 class="mt-3">Conjunto de caracteres</h5>>
          <p>Esta simbología soporta todos los caracteres númericos (0-9).</p>

          <p>Aunque este código de barras es mucho más denso que "Code 39", la seguridad teórica de la información codificada "I25" no es tan densa. Por esta razón, se sugiere que siempre se utilice "I25" con el dígito opcional de verificación o estandarizar los códigos de barras para la longitud de un caracter.</p>

          <h5 class="mt-3">Dígito de verificación</h5>
          <p>Interleaved 2 of 5 contiene un dígito de verificación que está basado en el algorítmo modulo-10.</p>

          <h5 class="mt-3">Demenciones del símbolo</h5>
          <p>La altura mínima recomendada para el escaneo del símbolo es 5.0mm o 15% del ancho del símbolo (excluyendo las zonas de espaciado), dependiendo de cual sea más grande. Las zonas de espaciado tienen que ser al menos de 10 módulos de ancho.</p>

          <p>El código de barras más denso con esta codificación que puede ser impreso en una impresora Epson o una impresora punto-matriz IMB compatible, es aproximadamente de 9 caracteres por pulgada, sin incluir el caracter inicial y final. En una impresora laser, la densidad puede ser aumentada a aproximadamente 17 caracteres por pulgada.</p>

          <h5 class="mt-3">Barras de contorno</h5>
          <p>Codigos de barras con codificación "I25" pueden incluir contornos tales como: un recuadro exterior o dos barras perpendiculares a lo largo del mismo.</p>
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="heading9">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="true" aria-controls="collapse9">
          <b>IMB</b>
        </button>
      </h2>
      <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#accordionBarcodes">
        <div class="accordion-body">
          <p>Código de barras inteligente para correos <strong>(IMB)</strong>, o USPS Intelligent Mail Barcode también conocido como USPS OneCodeSolution o USPS 4-State CUstomer Code, fue desarrollado por el servicio de mensajería de Estados Unidos (USPS) y es utilizado para automatizar la organización del correo. Supercede a los códigos USPS Postal Numeric Encoding Technique (USPS POSTNET) y a Postal Alpha Numeric Encoding Technique (USPS PLANET) y codifica efectivamente desde estas simbologías a un solo símbolo añadendo mejoría en el seguimiento de la información.</p>

          <p>El USPS desarrolló una familia de códigos de barras inteligente para el correo:
            <ul>
              <li><strong>Intelligent Mail Barcode (IMB):</strong> se utiliza para la organización y seguimiento de cartas, tarjetas y sobres</li>
              <li><strong>Intelligent Mail Package Barcode (IMPB):</strong> similar a IMB pero utiliza simbología GS1-128, la cual es compatible con paquetes de equipamiento de procesado</li>
              <li><strong>Intelligent Mail Tray Label:</strong> utilizado en bandejas, tuberías y sacos; incluye un código de barras único e inteligente de 24 dígitos que es codificado utilizando simbología ISS Code 128.</li>
              <li><strong>Intelligent Mail Container Barcode:</strong> utilizado con etiquetas de contenedores generados por gente que trabaja repartiendo correos; es escaneado en varios puntos de transporte y procesado.</li>
            </ul>
          </p>

          <p>IMB está definido en la norma USPS-B-3200 <i>Intelligent Mail Barcode (4-State Customer Barcode).</i></p>

          <h5 class="mt-3">Estructura del Símbolo</h5>
          <ul>
            El símbolo está compuesto por los siguentes elementos:
            <li>Zona de inicio con espaciado</li>
            <li>Código de seguimiento (20 dígitos) que los posibles siguientes campos:</li>
            <ul>
              <li>Identificador del código de barras</li>
              <li>Identificador del tipo de servicio</li>
              <li>ID de quien entrega el correo</li>
              <li>Numero de seguimiento desde el origen</li>
              <li>Tipo de equipamiento a ser procesado</li>
              <li>Fecha</li>
              <li>Hora</li>
              <li>Numero de serie</li>
            </ul>
            <li>Código ZIP(0, 5, 9 u 11 dígitos)</li>
            <li>Zona de finalizado con espaciado</li>
          </ul>
          <p>Cada caracter símbolo está compuesto de cuatro barras separadas. El termino "4-state" deriva del hecho de que cada barra en esta simbología está uno de los cuatro estados. Los nombres de los cuatro estados son:
            <ul>
              <li>T(tracker)</li>
              <li>D(descender)</li>
              <li>A(ascender)</li>
              <li>F(full bar)</li>
            </ul>
          </p>

          <h5 class="mt-3">Conjunto de caracteres</h5>
          <p>Esta simbología soporta todos los caracteres númericos (0-9).</p>

          <h5 class="mt-3">Densidad</h5>
          <p>IMB puede codificar 20, 25, 29 o 31 dígitos de información en 65 barras verticales. La densidad del código es de 20 a 24 barras cada 25.4mm. Toda las barras están separadas equitativamente.</p>

          <h5 class="mt-3">Posicionamiento</h5>
          <p>IMB puede ser usado en cartas o sobres. Para asegurar el Posicionamiento del mismo, deber ser colocado en una de las siguinte locaciones del sobre.
            <ul>
              <li>Por encima o debajo de la dirección dentro del bloque de dirección</li>
              <li>POr encima del bloque de direccion.</li>
              <li>En la zona del código de barras</li>
            </ul>
          </p>

          <p>El código debe ser impreso a 0°.</p>

          <p>IMB requiere un minimo de zona de espaciado de 0.028 pulgadas por encima o debajo del código de barras y 0.125 pulgadas a cada lado.</p>
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="heading10">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="true" aria-controls="collapse10">
          <b>KIX</b>
        </button>
      </h2>
      <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10" data-bs-parent="#accordionBarcodes">
        <div class="accordion-body">
          <p>KlantIndex <strong>(KIX)</strong> 4-Stat Customer Code is utilizado por el sistema posta Holandes para acelerar el procesamiento automático de correo en bulto y otros fines. Es una variante del Royal Mail 4-State Customer Barcode (RMS4CC); KIX tiene las mismas especificaciones para las barras de información como RMS4CC con la diferencia de no tener barras de inicio y fin.</p>

          <p>Kix 4-State CUstomer Code está definido en <i>De KIX® van TNT Post - Aanwijzingen voor het gebruik - Technische specificaties.</i></p>

          <h5 class="mt-3">Estructura del Símbolo</h5>
          <ul>
            El símbolo está compuesto por los siguentes elementos:
            <li>Zona de inicio con espaciado</li>
            <li>Código de seguimiento (20 dígitos) que los posibles siguientes campos:</li>
            <ul>
              <li>Zona de inicio con espaciado</li>
              <li>Codigo Postal, contiene 4 números y 2 caracteres (longitud fija)</li>
              <li>Número de casa / caja de correo / órden, conteniendo hasta un máximo de 5 caracteres (longitud variable)</li>
              <li>Signo de separación, se utiliza la "X" para separar el número de casa del apéndice</li>
              <li>Apéndice del número de casa, conteniendo hasta un máximo de 6 caracteres (logitud variable)</li>
              <li>Zona de finalizado con espaciado</li>
            </ul>
            <li>Código ZIP(0, 5, 9 u 11 dígitos)</li>
            <li>Zona de inicio con espaciado</li>
          </ul>

          <p>Cada caracter símbolo está compuesto de cuatro barras separadas. El termino "4-state" deriva del hecho de que cada barra en esta simbología está uno de los cuatro estados. Los nombres de los cuatro estados son:
            <ul>
              <li>T(tracker)</li>
              <li>D(descender)</li>
              <li>A(ascender)</li>
              <li>F(full bar)</li>
            </ul>
          </p>

          <h5 class="mt-3">Conjunto de caracteres</h5>
          <p>Esta simbología soporta los siguentes caracteres alfanuméricos:
            <ul>
              <li>Todos los caracteres numéricos (0-9)</li>
              <li>Todas las letras mayusculas (A-Z)</li>
            </ul>
          </p>

          <h5 class="mt-3">Densidad</h5>
          <p>La densidad de esta simbología es de 20 a 24 barras por cada 25.4mm.</p>
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="heading11">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="true" aria-controls="collapse11">
          <b>MSI</b>
        </button>
      </h2>
      <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11" data-bs-parent="#accordionBarcodes">
        <div class="accordion-body">
          <p><strong>MSI Plessey</strong> (tambíen conocido como Modified Plessey) es una simbología de longitud variable que solo contiene numeros. Es una variante del Código Plessey, el cual fue desarrollado por Plessey Company of England en 1971.</p>

          <p>MSI Data Corporation desarrolló MSI Plessey para corregir las desventajas del Código Plessey: no codifica los números eficientemente y es una de las simbologías de códigos de barras más propensas al error. El segundo dígito de verificación que MSI Data Corporation añadió como una opción mejoró la reliabilidad del código suficientemente como para que MSI Plessey sea utilizado actualmente en aplicaciones de especialidades.</p>

          <p>MSI Plessey ha sido utilizado tipicamente para el seguimiento de inventarios, tales como lo que hay en las estanterias de los supermercados y otros lugares donde se almacenen cosas para asi poder indicar que se esta almacenando. Se lo ha utilizaod tambien para identificar containers de almacenamiento.</p>

          <p>MSI Plessey es actualmente mantenido por Symbol Technologies, Inc.</p>

          <h5 class="mt-3">Estructura del Símbolo</h5>
          <ul>
            El símbolo está compuesto por los siguentes elementos:
            <li>Zona de inicio con espaciado</li>
            <li>Caracter inicial (barra ancha, espacio angosto)</li>
            <li>Data codificada</li>
            <li>Uno o dos dígitos de verificación</li>
            <li>Caracter final (barra angosta, estacio ancho, barra angosta)</li>
            <li>Zona de finalizado con espaciado</li>
          </ul>

          <h5 class="mt-3">Conjunto de caracteres</h5>
          <p>Esta simbología soporta los caracteres numéricos (0-9).</p>

          <h5 class="mt-3">Dígitos de verificación</h5>
          <p>MSI Plessey contiene opcinalmente un dígito o un par de dígitos de verificación que estan basados en los siguientes algoritmos:
            <ul>
              <li>Módulo 10</li>
              <li>Módulo 11</li>
              <li>Módulo 1010 (calculado de dos módulos 10)</li>
              <li>Módulo 1110 (calculado de un módulo 11 y un módulo 10)</li>
            </ul>
          </p>
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="heading12">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="true" aria-controls="collapse12">
          <b>PHARMA</b>
        </button>
      </h2>
      <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12" data-bs-parent="#accordionBarcodes">
        <div class="accordion-body">
          <p><strong>PHARMA-CODE - One-Track</strong> (tambíen conocido como PHARMA-CODE Standard o Código Binario Farmaceutico) es una simbología uni-dimensional que fue desarrollada a fines de los 1970s y es usada en el empaquetedo de productos farmaceuticos. Fue diseñado para ser leido (tipicamente de derecha a izquierda) por cualquier lector de códigos de barras a pesar de cualquier error de impresión que pudiera ocurrir en la etiqueta. Por ejemplo, se pueden agregar barras de color al símbolo para verificar que esos colores (tales como el color rojo alerta) son impresos correctamente en la etiqueta.</p>

          <p>PHARMA-CODE es tipicamente utilizado para control de inventario en una farmacia y como verficación de seguridad, asegurando así que los materiales de empaquetado y contenidos corresponden y son correctos. No se lo utiliza para ventas. Para aplicaciones de espacio reducido existe una versión miniatura.</p>

          <p>PHARMA-CODE is definido en <i>Laetus PHARMA-CODE Guide.</i> La división Laetus de Roamco Phartechnik GmbH en Asbach, Alemania es dueña de la marca PHARMA-CODE.</p>

          <h5 class="mt-3">Estructura del Símbolo</h5>
          <ul>
            El símbolo está compuesto por los siguentes elementos:
            <li>Zona de inicio con espaciado</li>
            <li>Barra inicial opcional</li>
            <li>Un entero codificado en formato binario</li>
            <li>Una barra opcional de color, utilizada para verficiar la presencia de ciertos colores en el paquete</li>
            <li>Barra final opcional</li>
            <li>Zona de finalizado con espaciado</li>
          </ul>

          <p>A diferencia de otras simbología 1D, PHARMA-CODE codifica su información en formato binario en vez de decimal, utilizando dos grosores de barras: angosto y ancho. El entero que PHARMA-CODE codifica puede tener minimamente 3 caracteres (representados como dos barras angostas) y 131070 caracteres como máximo (representados como 16 barras anchas).</p>

          <p>A cada lado se encuenta una zona de espaciado de 6mm y es olbigatoria. No se incluye un dígito de verificación.</p>

          <h5 class="mt-3">Conjunto de caracteres</h5>
          <p>Esta simbología soporta los caracteres numéricos (0-9).</p>

          <h5 class="mt-3">Barras de Colores</h5>
          <p>PHARMA-CODE permite la adición de una o más barras de colores al código de barras. Estas barras no contienen ninguna información pero son utilizadas para verificar que el color este presente en la etiqueta. Cietos escaners de códigos de barras pueden ser configurados para la detección de un color en específico y verificar su presencia. Cuando el color es escaneado, es validado. De lo contrario, aparecería un error.</p>
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="heading13">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse13" aria-expanded="true" aria-controls="collapse13">
          <b>PHARMA</b>
        </button>
      </h2>
      <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="heading13" data-bs-parent="#accordionBarcodes">
        <div class="accordion-body">
          <p><strong>PHARMA-CODE - Two-Track</strong> es una simbología uni-dimensional que fue desarrollada a fines de los 1970s y es utilizada en el empaquetado de productos farmaceuticos. Fue diseñado para ser leido a pesar de cualquier error de impresión que pudiera haber. A diferencia de PHARMA-CODE - One-Track, PHARMA-CODE - Two-Track utiliza el posicionamiento vertical combinado de mitades de barras para codificar su información. Fue diseñado para ser leido de derecha a izquierda.</p>

          <p>PHARMA-CODE es tipicamente utilizado para control de inventario en una farmacia y como verficación de seguridad, asegurando así que los materiales de empaquetado y contenidos corresponden y son correctos. No se lo utiliza para ventas.</p>

          <p>PHARMA-CODE is definido en <i>Laetus PHARMA-CODE Guide.</i> La división Laetus de Roamco Phartechnik GmbH en Asbach, Alemania es dueña de la marca PHARMA-CODE.</p>

          <h5 class="mt-3">Estructura del Símbolo</h5>
          <ul>
            El símbolo está compuesto por los siguentes elementos:
            <li>Zona de inicio con espaciado</li>
            <li>Un entero codificado en formato binario</li>
            <li>Zona de finalizado con espaciado</li>
          </ul>

          <p>A diferencia de otras simbología 1D, PHARMA-CODE codifica su información en formato binario en vez de decimal, utilizando dos grosores de barras: angosto y ancho. El entero que PHARMA-CODE codifica puede tener minimamente 3 caracteres (representados como dos barras angostas) y 64570080 caracteres como máximo (representados como 16 barras anchas).</p>

          <p>A cada lado se encuenta una zona de espaciado de 6mm y es olbigatoria. No se incluye un dígito de verificación.</p>

          <h5 class="mt-3">Conjunto de caracteres</h5>
          <p>Esta simbología soporta los caracteres numéricos (0-9).</p>
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="heading14">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse14" aria-expanded="true" aria-controls="collapse14">
          <b>PLANET</b>
        </button>
      </h2>
      <div id="collapse14" class="accordion-collapse collapse" aria-labelledby="heading14" data-bs-parent="#accordionBarcodes">
        <div class="accordion-body">
          <p><strong>USPS Postal Alpha Numeric Encoding Technique (PLANET)</strong> es una simbología que fue desarrollada por el Servicio de Mensajería de Estados Unidos (USPS) para identificar, ordenar y seguir piezas de correo automaticamente. Fue utilizado tipicamente en conjunto con la simbología USPS Postal Numeric Encoding Technique (USPS POSTNET).</p>

          <p>En 2009, POSTNET fue supercedido por USPS Intelligent Mail Barcode (IMB), y PLANET fue supercedido por IMB en 2013.</p>

          <p>El Servicio de Mensajería de Estados Unidos ofrece un servicio de suscripción a mensajeros, llamado "Confirm", que mejora el proceso de seguimiento de correo. PLANET es uno de los componentes del sistema Confirm. Hay disponible dos tipos de servicios: "Destination Confirm" (el cual genera un correo que procesa información de un correo que sale) y "Origin Confirm" (el cual genera información de un correo que entra). Los mensajeros pueden utilizar uno o ambos servicios.</p>

          <h5 class="mt-3">Estructura del Símbolo</h5>
          <p>El símbolo está compuesto por los siguentes elementos, dependiendo de cual tipo de servicio de Confirm se utilice:</p>

          <p><strong>Servicio "Destination Confirm"</strong></p>

          <ul>
            <li>Zona de inicio con espaciado</li>
            <li>Barra inicial, también llamada barra de encuadre, la cual es una sola barra alta</li>
            <li>Dos dígitos de identificación del servicio</li>
            <li>Cinco dígitos correspondientes al ID de suscriptor (asignado por USPS)</li>
            <li>Seis dígitos de utilización de mensajero (definido por el mensajero)</li>
            <li>Un dígito de verificación</li>
            <li>Barra final, también llamada barra de encuadre, la cual es una sola barra alta</li>
            <li>Zona de finalizado con espaciado</li>
          </ul>

          <p><strong>Servicio "Origin Confirm"</strong></p>

          <ul>
            <li>Zona de inicio con espaciado</li>
            <li>Barra inicial, también llamada barra de encuadre, la cual es una sola barra alta</li>
            <li>Dos dígitos de identificación del servicio</li>
            <li>Nueve dígitos u once dígitos correspondientes al ID de cliente</li>
            <li>Un dígito de verificación</li>
            <li>Barra final, también llamada barra de encuadre, la cual es una sola barra alta</li>
            <li>Zona de finalizado con espaciado</li>
          </ul>

          <p>PLANET codifica información variando la altura de las barras en el código de barras. Todas las barras y espacios son del mismo grosor. Cada caracter contiene cinco barras, tres de las cuales son altas y dos son bajas.</p>

          <h5 class="mt-3">Conjunto de caracteres</h5>
          <p>Esta simbología soporta los caracteres numéricos (0-9).</p>

          <h5 class="mt-3">Dígito de Verificación</h5>
          <p>PLANET contiene un dígito de verificación, también llamado dígito de corrección que está basado en el algorítmo modulo-10.</p>
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="heading15">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse15" aria-expanded="true" aria-controls="collapse15">
          <b>PLANET</b>
        </button>
      </h2>
      <div id="collapse15" class="accordion-collapse collapse" aria-labelledby="heading15" data-bs-parent="#accordionBarcodes">
        <div class="accordion-body">
          <p><strong>USPS Postal Numeric Encoding Technique (POSTNET)</strong> es una simbología que fue desarrollada por el Servicio de Mensajería de Estados Unidos (USPS) para ayudar en el ordenamiento de correo respuesta de trabajo y cortesía y fue utilizado para el bulto regular de mensajería. Era tipicamente utilizado en conjunto con la simbología USPS Postal Alpha Numeric Encoding Technique (USPS PLANET).</p>

          <p>En 2009, POSTNET fue supercedido por USPS Intelligent Mail Barcode (IMB), y PLANET fue supercedido por IMB en 2013.</p>

          <p>El símbolo puede representar un Código Posta de cinco dígitos, nueve dígitos (ZIP+4), u 11 dígitos de punto de entrega (DPBC). El Servicio de Mensajería de Estados Unidos desarrolló DPBC unicamente para identificar cada uno de los 115 millones de puntos en el país. Su utilización se vio muy reducida cuando los mensajeros organizaban el correo previamente a la entrega.</p>

          <p>POSTNET está definido en el documento <i>USPS Designing Letter and Reply Mail.</i></p>

          <h5 class="mt-3">Estructura del Símbolo</h5>
          <p>El símbolo está compuesto por los siguentes elementos:</p>

          <ul>
            <li>Zona de inicio con espaciado</li>
            <li>Barra inicial, también llamada barra de encuadre, la cual es una sola barra alta</li>
            <li>Información de la dirección codificada</li>
            <li>Un dígito de verificación</li>
            <li>Barra final, también llamada barra de encuadre, la cual es una sola barra alta</li>
            <li>Zona de finalizado con espaciado</li>
          </ul>

          <h5 class="mt-3">Conjunto de caracteres</h5>
          <p>Esta simbología soporta los caracteres numéricos (0-9).</p>

          <h5 class="mt-3">Dígito de Verificación</h5>
          <p>POSTNET contiene un dígito de verificación, también llamado dígito de corrección que está basado en el algorítmo modulo-10. Este dígito es añadido al ZIP o DPBC de la siguente manera:
            <ul>
              <li>Para un ZIP de 5 dígitos, el código de barras es de 6 dígitos de longitud.</li>
              <li>Para un ZIP+4 de 9 dígitos, el código de barras de de 10 dígitos de longitud.</li>
              <li>Para un DPBC de 11 dígitos, el código de barras es de 12 dígitos de longitud.</li>
            </ul>
          </p>

          <p>Si no se proveé exactamente 5, 9 u 11 dígitos en el ZIP o DPBC, la información a ser codificada se va a ajustar a la longitud de uno esos números. Esto resulta en un código barras que contiene información dirente a la prentendida.</p>

          <h5 class="mt-3">Densidad</h5>
          <p>A diferencia de otras simbologías de códigos de barras, las cuales son válidas en la variedad de densidades, USPS especificó un rango de densidad preciso para la simbología POSTNET. La densidad correcta es de 21 barras por pulgada, con más o menos una barra. Cada barra y espacio deben ser entre 0.045 y 0.050 pulgadas de ancho, para una densidad de cuatro caracteres por pulgada.</p>

          <h5 class="mt-3">Dimensiones del Símbolo</h5>
          <p>Las alturas correctas para las barras son las siguientes:
            <ul>
              <li>La altura de las barras altas es de 0.125 pulgadas, con más o menos 0.010 pulgadas</li>
              <li>La altura de las barras bajas es de 0.050 pulgadas, con más o menos 0.010 pulgadas</li>
            </ul>
          </p>

          <p>Los anchos correctos para las barras y los espacios son los siguientes:
            <ul>
              <li>El ancho de las barras es entre 0.015 y 0.025 pulgadas</li>
              <li>El ancho de las barras y espacios pares es entre 0.045 y 0.050 pulgadas</li>
            </ul>
          </p>

          <p>POSTNET precisa de una zona de espaciado de unas 0.04 pulgadas por arriba y debajo del símbolo y 0.125 pulgadas a cada lado.</p>

          <h5 class="mt-3">Posicionamiento</h5>
          <p>Los escaners que son utilizados por USPS para leer los códigos de barras postales son diseñados para buscar al código de barras en un area en particular del sobre. Por lo tanto, si no se posiciona al mismo correctamente, el escaner puede tener problemas al buscarlos y leerlos.</p>

          <p>El correcto posicionamiento es el siguiente:
            <ul>
              <li>El borde izquierdo del código de barras debe estar entre 3.5 y 4.25 pulgadas del borde derecho del sobre.</li>
              <li>El borde inferior del código de barras debe estar a 0.25 pulgadas (más o menos 0.125 pulgadas) del borde inferior del sobre.</li>
            </ul>
          </p>
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="heading16">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse16" aria-expanded="true" aria-controls="collapse16">
          <b>RMS4CC</b>
        </button>
      </h2>
      <div id="collapse16" class="accordion-collapse collapse" aria-labelledby="heading16" data-bs-parent="#accordionBarcodes">
        <div class="accordion-body">
          <p><strong>RMS4CC (Royal Mail 4-State Customer Barcode o CBC)</strong> fue desarrollado por la Mensajería de la Realeza en el Reino Unido y es utilizado para el ordenamiento automatizado del correo.</p>

          <p>RMS4CC está definido en el documento de la Mensajería de la Realeza <i>Mailsort User Guide: Mailsort 700.</i></p>

          <h5 class="mt-3">Estructura del Símbolo</h5>
          <p>El símbolo está compuesto por los siguentes elementos:</p>

          <ul>
            <li>Zona de inicio con espaciado</li>
            <li>Barra inicial (un solo tracker, ascendente)</li>
            <li>Caracteres símbolo que representan la información</li>
            <li>Un dígito de verificación</li>
            <li>Barra final (un solo tracker, ascendente, descendente)</li>
            <li>Zona de finalizado con espaciado</li>
          </ul>

          <p>Cada caracter símbolo está compuesto de cuatro barras separadas. El termino "4-state" deriva del hecho de que cada barra en esta simbología está uno de los cuatro estados. Los nombres de los cuatro estados son:
            <ul>
              <li>T(tracker)</li>
              <li>D(descender)</li>
              <li>A(ascender)</li>
              <li>F(full bar)</li>
            </ul>
          </p>

          <h5 class="mt-3">Conjunto de caracteres</h5>
          <p>Esta simbología soporta los siguiente caracteres:
            <ul>
              <li>Caracteres numéricos (0-9)</li>
              <li>Letras mayusculas (A-Z)</li>
              <li>Parentesis de apertura y cierre</li>
            </ul>
          </p>

          <h5 class="mt-3">Dígito de Verificación</h5>
          <p>RMS4CC contiene un dígito de verificación que esta basado en el algorítmo modulo-6</p>

          <h5 class="mt-3">Dimensiones del Símbolo</h5>
          <p>La longitud mínima de esta simbología es 35.98mm (cuando se esté codificando un código de cinco dígitos que incluya barras iniciales y finales, un sufijo para el punto de entrega y un dígito de verificación a 24 barras por pulgada). La máxima longitud es 68.58mm (cuando se este codificando un código de siete dígitos que incluya barras inciales y finales, un sufijo para el punto de entrega y un dígito de verificación a 20 barras por pulgada). La densidad del código es de 20 a 24 pulgadas por cada 25.4mm. Todas las barras estan equitativamente separadas.</p>

          <p>RMS4CC requiere una zona de espacidado de al menos 2mm en todos sus lados.</p>

          <h5 class="mt-3">Posicionamiento</h5>
          <p>Para posicionar correctamente un código de barras RMS4CC, debe estar dentro de los siguientes márgenes:
            <ul>
              <li>No menos de 18mm hacia arriba desde el borde inferior del correo</li>
              <li>No más de 120mm hacia arriba desde el borde inferior del correo</li>
              <li>No menos de 15mm hacia abajo desde el borde superior del correo</li>
              <li>No menos de 15mm hacia cada lado del correo.</li>
            </ul>
          </p>

          <p>El código puede ser impreso a 0°, 90°, 180° ó 270°.</p>
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="heading17">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse17" aria-expanded="true" aria-controls="collapse17">
          <b>Standard 2 of 5</b>
        </button>
      </h2>
      <div id="collapse17" class="accordion-collapse collapse" aria-labelledby="heading17" data-bs-parent="#accordionBarcodes">
        <div class="accordion-body">
          <p><strong>Standard 2 of 5</strong>, también conocido como "IATA 2 of 5", es miembro de la familia simbológica del Code 2 of 5, el cual fue desarrollado por primera vez en 1968. Se lo ha utilizado por el International Air Transport Association (IATA) para el procesado de carga aerea.</p>

          <p>Los espacios un un símbolo Standard 2 of 5 son de ancho fijo, para así solamente que las barras sean utilizadas para codificar información. El "2 of 5" proviene del hecho de que de cinco barras para codificar un caracter, dos son anchas y tres angostas.</p>

          <h5 class="mt-3">Estructura del Símbolo</h5>
          <p>El símbolo está compuesto por los siguentes elementos:</p>

          <ul>
            <li>Zona de inicio con espaciado</li>
            <li>Caracter inicial</li>
            <li>Caracteres información</li>
            <li>Un dígito de verificación opcional</li>
            <li>Caracter final</li>
            <li>Zona de finalizado con espaciado</li>
          </ul>

          <h5 class="mt-3">Conjunto de caracteres</h5>
          <p>Esta simbología soporta todos los caracteres númericos (0-9).</p>

          <h5 class="mt-3">Dígito de Verificación</h5>
          <p>Standard 2 of 5 contiene un dígito de verificación que esta basado en el algorítmo modulo-10</p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include_once '../estructura/footer.php';
?>