<?php
/* =====================================================================
   GUÍA DE ORIENTACIÓN — BUEN USO DE FERRETERÍA LAFISE (NICARAGUA)
   Archivo único: index.php. Requiere PHP 7.4+.
   Edite SOLO el bloque $SITE. Todo valor "PENDIENTE" debe completarse
   con información verificada antes de publicar. Nada aquí es oficial
   de LAFISE: es una guía educativa independiente.
   ===================================================================== */

$SITE = [
  // --- Identidad (cámbiela por el nombre real de su proyecto) ---
  'brand'       => 'Guía del Cliente Ferretero',          // nombre comercial de ESTA guía
  'brand_note'  => 'Guía educativa independiente',
  'lang'        => 'es-NI',
  'title'       => 'Guía de orientación sobre el buen uso de Ferretería LAFISE en Nicaragua',
  'description' => 'Guía educativa e independiente para clientes: cómo usar de forma ordenada los servicios de Ferretería LAFISE en Nicaragua. No somos un banco ni recibimos pagos.',
  'canonical'   => '',                                    // URL real de la página; vacío = no se imprime

  // --- Colores (variables CSS) ---
  'colors' => [
    'ink' => '#14212B', 'steel' => '#1F3A4D', 'steel2' => '#2E5670',
    'safety' => '#F2B705', 'paper' => '#F3F5F6', 'white' => '#FFFFFF',
    'line' => '#D3DADF', 'alert' => '#A61E1E', 'alertbg' => '#FDEEEE',
  ],

  // --- Contacto de ESTA guía (no de LAFISE). PENDIENTE: completar con datos reales ---
  'contact_email'  => '',   // PENDIENTE
  'contact_phone'  => '',   // PENDIENTE

  // --- Responsable de la guía (legal). PENDIENTE: completar ---
  'owner_name'     => 'JHON FREDY DIAZ MENDEZ',
  'legal_links'    => [    // ['texto' => 'url']. Solo agregue enlaces que existan.
    // 'Política de privacidad' => '/privacidad.php',
  ],

  // --- Datos del anunciante / patrocinador (se muestran bajo el encabezado) ---
  'sponsor_name'   => 'JHON FREDY DIAZ MENDEZ',
  'sponsor_id_label' => 'Cédula',
  'sponsor_id'     => '1.095.822.793',
  'sponsor_note'   => 'Contenido educativo independiente',

  // --- Medición con Google Ads (solo se carga si el visitante pulsa ACEPTAR) ---
  'gtm_id'         => 'GTM-5PDWFKC2',   // Google Tag Manager. Se carga SOLO si el visitante pulsa ACEPTAR.
  'ads_id'         => '',   // PENDIENTE: su ID de Google Ads (formato AW-XXXXXXXXX). Vacío = no se carga nada.
  // Mientras 'gtm_id' y 'ads_id' estén vacíos, el banner solo sirve de vista previa (no carga ni guarda cookies de Google).
  // Ponga false para publicar: así el banner no aparecerá si no hay medición real.
  'banner_preview' => true,
];

/* ---------- Contenido (edite textos sin tocar el HTML) ---------- */
$buenas_practicas = [
  ['Use los canales de atención de la ferretería', 'Para comprar, cotizar o consultar, comuníquese directamente con Ferretería LAFISE. Esta guía no sustituye esos canales.'],
  ['Pregunte por las condiciones por escrito', 'Precios, disponibilidad, garantías, entregas y formas de pago deben confirmarse directamente con la ferretería y quedar en una proforma o factura.'],
  ['Guarde sus comprobantes', 'Conserve facturas, recibos y proformas. Son su respaldo para cambios, garantías o reclamos.'],
  ['Compare la proforma con el pedido', 'Revise cantidades, medidas, marcas y totales antes de aceptar o retirar los materiales.'],
  ['Prepare su información antes de acudir', 'Lleve a mano su lista de materiales, las medidas y los documentos que le soliciten, para que la atención sea más ágil.'],
  ['Consulte dudas antes de comprar', 'Si no sabe qué material necesita, pida orientación técnica a la ferretería y confirme la recomendación.'],
];

$pasos = [
  ['Defina qué necesita', 'Anote materiales, medidas y cantidades. Una lista clara evita compras repetidas o faltantes.'],
  ['Contacte a la ferretería', 'Comuníquese con Ferretería LAFISE por sus canales de atención y pida disponibilidad y una proforma.'],
  ['Revise la proforma', 'Confirme productos, precios, impuestos y condiciones de entrega o retiro.'],
  ['Realice su pago directamente con la ferretería', 'Los pagos se hacen directamente con la ferretería, siguiendo las indicaciones que ellos le den. Esta guía no recibe pagos.'],
  ['Verifique y conserve el comprobante', 'Al recibir o retirar, compare con la factura y guarde todos los documentos.'],
];

$calcular = [
  ['Mida dos veces', 'Tome las medidas del espacio y anótelas con su unidad (metros, centímetros o pulgadas). Un error de medida se repite en toda la compra.'],
  ['Haga un croquis sencillo', 'Un dibujo a mano con medidas y fotos ayuda al personal de la ferretería a orientarle sobre cantidades y modelos.'],
  ['Pregunte por el margen de desperdicio', 'Muchos materiales se pierden en cortes o roturas. Consulte cuánto margen conviene para su tipo de trabajo.'],
  ['Revise las presentaciones', 'Un mismo producto puede venir en distintos tamaños o empaques. Calcule cuál se ajusta mejor a lo que necesita.'],
  ['Separe lo esencial de lo opcional', 'Decidir qué es imprescindible le permite ajustar el presupuesto y comprar por etapas si hace falta.'],
];

$leer_proforma = [
  ['Descripción del producto', 'Nombre, marca, referencia y características (medida, grosor, material). Compárela con lo que usted anotó.'],
  ['Cantidad y unidad de medida', 'Confirme si se cotiza por pieza, metro, libra, saco, caja u otra unidad. Una unidad distinta cambia el total.'],
  ['Precio unitario y subtotal', 'Compruebe que la cantidad multiplicada por el precio unitario coincida con el subtotal de cada línea.'],
  ['Impuestos y descuentos', 'Observe si el precio ya incluye impuestos y cómo se aplica cualquier descuento.'],
  ['Vigencia de la proforma', 'Pregunte hasta cuándo es válida. Precios y existencias pueden cambiar pasado ese tiempo.'],
  ['Entrega o retiro', 'Revise fechas, lugar, si hay costo de transporte y quién se encarga de la descarga.'],
];

$uso_responsable = [
  ['Lea las instrucciones y advertencias', 'Antes de usar una herramienta, pintura, adhesivo o producto químico, lea la etiqueta y el manual del fabricante.'],
  ['Use equipo de protección', 'Guantes, lentes o mascarilla según el trabajo. Pregunte qué protección corresponde al producto que lleva.'],
  ['Elija la herramienta adecuada', 'Cada herramienta tiene un uso previsto. Si duda cuál necesita, pida orientación antes de comprar.'],
  ['No mezcle productos', 'No combine productos químicos entre sí, salvo que el fabricante lo indique expresamente.'],
  ['Almacene con orden', 'Guarde materiales y herramientas en un lugar seco, ordenado y fuera del alcance de los niños.'],
  ['Consulte a un profesional cuando corresponda', 'Para trabajos eléctricos, de gas o estructurales, acuda a una persona calificada.'],
];

$preguntas_garantia = [
  '¿Este producto tiene garantía? ¿De cuánto tiempo y qué cubre?',
  '¿Puedo cambiarlo si la medida o el modelo no me sirve? ¿En qué plazo y con qué documentos?',
  '¿Los productos cortados a medida o ya abiertos admiten cambio?',
  '¿Dónde y cómo se presenta un reclamo de garantía?',
  '¿Debo conservar el empaque original?',
];

$lista_antes = [
  'Anoté qué necesito, con medidas y cantidades',
  'Definí un presupuesto aproximado',
  'Llevo un croquis o fotos del espacio o del repuesto',
  'Tengo claras mis preguntas sobre garantía y cambios',
  'Sé por qué canal comunicarme con la ferretería',
];

$lista_despues = [
  'Comprobé que lo recibido coincide con la factura',
  'Guardé la factura y los documentos de garantía',
  'Leí las instrucciones de uso de cada producto',
  'Almacené los materiales de forma ordenada',
  'Anoté lo que aprendí para mi próxima compra',
];

$glosario = [
  ['Cotización o proforma', 'Documento con precios y condiciones de una posible compra. No es una factura ni confirma por sí solo la compra.'],
  ['Factura', 'Comprobante de la compra realizada. Guárdela: suele ser necesaria para garantías y cambios.'],
  ['Garantía', 'Respaldo sobre un producto durante un tiempo y bajo condiciones que define quien lo vende o fabrica.'],
  ['Existencias', 'Cantidad de un producto disponible para entrega o retiro.'],
  ['Unidad de medida', 'Forma en que se vende un producto: por pieza, metro, libra, saco, galón, caja, etc.'],
  ['Presentación', 'Tamaño o empaque en que viene un producto, por ejemplo galón o cuarto de galón.'],
  ['Referencia o código', 'Identificador de un producto que ayuda a pedir exactamente el modelo que necesita.'],
];

$faq = [
  ['¿Para qué sirve esta guía?', 'Para orientarle sobre cómo preparar y organizar su compra o consulta en Ferretería LAFISE: qué preguntar, qué documentos guardar y qué revisar antes de aceptar un pedido.'],
  ['¿Esta página es del banco LAFISE o de Ferretería LAFISE?', 'No. Esta es una guía educativa de orientación independiente. No somos Banco LAFISE, no somos un banco y no somos la ferretería. No existe afiliación, patrocinio ni autorización de LAFISE, salvo que se indique expresamente lo contrario en esta página.'],
  ['¿Puedo pagar o hacer una transferencia a través de esta página?', 'No. No recibimos pagos, transferencias bancarias ni dinero de ningún tipo.'],
  ['¿Puedo hacer pedidos o compras aquí?', 'No. Para comprar, cotizar o reclamar debe comunicarse directamente con Ferretería LAFISE.'],
  ['¿Dónde encuentro los datos de atención de la ferretería?', 'En los medios de atención de la propia empresa. Esta guía no los administra.'],
  ['¿Cómo se usa mi información si contacto a esta guía?', 'PENDIENTE: el responsable debe completar este texto según su política de privacidad real antes de publicar.'],
];

/* ---------- Utilidades ---------- */
function e($s) { return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }
function cards($items) { foreach ($items as $i) { echo '<article class="card"><h3>' . e($i[0]) . '</h3><p>' . e($i[1]) . '</p></article>'; } }
function checks($items) { echo '<ul class="checklist">'; foreach ($items as $i) { echo '<li><label><input type="checkbox"> <span>' . e($i) . '</span></label></li>'; } echo '</ul>'; }
$c = $SITE['colors'];
$phone_href = preg_replace('/[^0-9+]/', '', $SITE['contact_phone']);
?>
<!DOCTYPE html>
<html lang="<?= e($SITE['lang']) ?>">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= e($SITE['title']) ?></title>
<meta name="description" content="<?= e($SITE['description']) ?>">
<meta property="og:title" content="<?= e($SITE['title']) ?>">
<meta property="og:description" content="<?= e($SITE['description']) ?>">
<meta property="og:type" content="website">
<?php if ($SITE['canonical']): ?><link rel="canonical" href="<?= e($SITE['canonical']) ?>"><?php endif; ?>
<!-- Favicon: PENDIENTE. Agregue <link rel="icon" href="favicon.png"> cuando tenga el archivo. -->
<style>
:root{
  --ink:<?= e($c['ink']) ?>;--steel:<?= e($c['steel']) ?>;--steel2:<?= e($c['steel2']) ?>;
  --safety:<?= e($c['safety']) ?>;--paper:<?= e($c['paper']) ?>;--white:<?= e($c['white']) ?>;
  --line:<?= e($c['line']) ?>;--alert:<?= e($c['alert']) ?>;--alertbg:<?= e($c['alertbg']) ?>;
  --font:"Trebuchet MS","Segoe UI",Tahoma,Verdana,sans-serif;
  --max:1100px;--r:6px;--t:.18s ease;
}
*{box-sizing:border-box}
html{scroll-behavior:smooth;scroll-padding-top:110px}
body{margin:0;font-family:var(--font);color:var(--ink);background:var(--white);line-height:1.6;font-size:17px;overflow-x:hidden}
img,svg{max-width:100%}
a{color:var(--steel2)}
.wrap{max-width:var(--max);margin:0 auto;padding:0 20px}
h1,h2,h3{line-height:1.15;margin:0 0 .5em;color:var(--steel)}
h1{font-size:clamp(2rem,5vw,3.2rem);letter-spacing:-.02em}
h2{font-size:clamp(1.5rem,3.4vw,2.1rem)}
h3{font-size:1.1rem}
p{margin:0 0 1em;max-width:68ch}
:focus-visible{outline:3px solid var(--safety);outline-offset:2px}

/* Aviso permanente */
.notice{background:var(--ink);color:var(--white);font-size:.9rem;padding:8px 0;text-align:center}
.notice strong{color:var(--safety)}

/* Encabezado */
.site-header{position:sticky;top:0;z-index:20;background:var(--white);border-bottom:3px solid var(--safety)}
.site-header .wrap{display:flex;align-items:center;justify-content:space-between;gap:16px;padding-top:10px;padding-bottom:10px;flex-wrap:wrap}
.brand{font-weight:700;color:var(--steel);text-decoration:none;font-size:1.1rem}
.brand small{display:block;font-weight:400;font-size:.75rem;color:var(--steel2)}
.nav{display:flex;gap:4px;overflow-x:auto;max-width:100%}
.nav a{white-space:nowrap;padding:8px 12px;text-decoration:none;color:var(--ink);border-radius:var(--r);font-size:.95rem;transition:background var(--t)}
.nav a:hover{background:var(--paper)}

/* Botones */
.btn{display:inline-block;padding:14px 24px;border-radius:var(--r);font-weight:700;text-decoration:none;border:2px solid var(--steel);transition:transform var(--t),background var(--t);min-height:48px}
.btn-primary{background:var(--steel);color:var(--white)}
.btn-primary:hover{background:var(--steel2)}
.btn-secondary{background:transparent;color:var(--steel)}
.btn-secondary:hover{background:var(--paper)}
.btn:active{transform:translateY(1px)}
.actions{display:flex;gap:12px;flex-wrap:wrap;margin-top:8px}

/* Hero */
.hero{background:var(--paper);padding:56px 0 48px;border-bottom:1px solid var(--line)}
.hero .wrap{display:grid;grid-template-columns:1.2fr .8fr;gap:40px;align-items:center}
.hero .lead{font-size:1.15rem}
.tag{display:inline-block;background:var(--safety);color:var(--ink);font-weight:700;padding:4px 12px;border-radius:var(--r);font-size:.85rem;margin-bottom:16px}
.hero-card{background:var(--white);border:2px solid var(--alert);border-radius:var(--r);padding:22px}
.hero-card h2{color:var(--alert);font-size:1.25rem}
.hero-card ul{margin:0;padding-left:20px}
.hero-card li{margin-bottom:6px}

/* Secciones */
section{padding:60px 0}
section.alt{background:var(--paper)}
.grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:20px}
.card{background:var(--white);border:1px solid var(--line);border-left:5px solid var(--steel);border-radius:var(--r);padding:20px}
.card p{margin:0}

/* Pasos (secuencia real) */
.steps{list-style:none;counter-reset:s;margin:0;padding:0;display:grid;gap:14px}
.steps li{counter-increment:s;display:grid;grid-template-columns:44px 1fr;gap:16px;align-items:start;background:var(--white);border:1px solid var(--line);border-radius:var(--r);padding:16px}
.steps li::before{content:counter(s);background:var(--steel);color:var(--white);font-weight:700;width:44px;height:44px;border-radius:50%;display:grid;place-items:center}
.steps h3{margin:0 0 4px}.steps p{margin:0}

/* Tabla */
.table-wrap{overflow-x:auto;border:1px solid var(--line);border-radius:var(--r);background:var(--white)}
table{border-collapse:collapse;width:100%;min-width:420px}
th,td{padding:14px 16px;text-align:left;border-bottom:1px solid var(--line)}
th{background:var(--steel);color:var(--white)}
.yes{color:#1B6B3A;font-weight:700}.no{color:var(--alert);font-weight:700}

/* Alertas */
.alerts{background:var(--alertbg);border:1px solid var(--alert);border-radius:var(--r);padding:24px}
.alerts h2{color:var(--alert)}
.alerts ul{margin:0;padding-left:20px}.alerts li{margin-bottom:8px}

/* FAQ */
details{background:var(--white);border:1px solid var(--line);border-radius:var(--r);margin-bottom:10px}
summary{cursor:pointer;padding:16px 48px 16px 18px;font-weight:700;color:var(--steel);list-style:none;position:relative}
summary::-webkit-details-marker{display:none}
summary::after{content:"+";position:absolute;right:18px;top:50%;transform:translateY(-50%);font-size:1.4rem;transition:transform var(--t)}
details[open] summary::after{content:"\2212"}
details[open] summary{border-bottom:1px solid var(--line)}
details .ans{padding:16px 18px 4px}

/* Contacto */
.pending{background:#FFF8DB;border:1px dashed #A07A00;padding:14px;border-radius:var(--r);font-size:.95rem}

/* Contenido educativo */
.checklist{list-style:none;margin:0;padding:0}
.checklist li{margin-bottom:10px}
.checklist label{display:flex;gap:10px;align-items:flex-start;cursor:pointer}
.checklist input{width:20px;height:20px;margin-top:3px;accent-color:var(--steel);flex:none}
.panel{background:var(--white);border:1px solid var(--line);border-radius:var(--r);padding:22px}
.panel h3{margin-bottom:12px}
.qlist{margin:0;padding-left:20px}.qlist li{margin-bottom:8px}
.glos{display:grid;gap:12px;margin:0}
.glos div{background:var(--white);border:1px solid var(--line);border-radius:var(--r);padding:14px 18px}
.glos dt{font-weight:700;color:var(--steel)}.glos dd{margin:4px 0 0}
.hint{font-size:.92rem;color:#4C5C66}

/* Patrocinador */
.sponsor{background:var(--white);border-bottom:1px solid var(--line)}
.sponsor .wrap{display:grid;grid-template-columns:1fr auto 1fr;gap:20px;align-items:center;padding-top:14px;padding-bottom:14px}
.sp-label{font-weight:700;font-size:.85rem;letter-spacing:.08em;text-transform:uppercase;color:#7A5A00;text-align:center}
.sp-box{display:flex;gap:32px;flex-wrap:wrap;background:#E6F0EF;border:1px solid #C5D9D6;border-left:5px solid var(--safety);border-radius:var(--r);padding:10px 18px}
.sp-box small{display:block;font-size:.72rem;letter-spacing:.06em;text-transform:uppercase;color:#4C5C66}
.sp-box strong{font-size:1.05rem;color:var(--ink)}
.sponsor em{color:#4C5C66;text-align:center;font-size:.95rem}
@media (max-width:820px){.sponsor .wrap{grid-template-columns:1fr;gap:10px}.sp-box{justify-content:center;gap:20px}}

/* Cookies */
.cookie{position:fixed;left:0;right:0;bottom:0;z-index:50;background:var(--ink);color:#E6ECEF;border-top:1px solid #34444F;box-shadow:0 -6px 20px rgba(0,0,0,.25)}
.cookie[hidden]{display:none}
.cookie .wrap{display:flex;gap:24px;align-items:center;justify-content:space-between;padding-top:16px;padding-bottom:16px;flex-wrap:wrap}
.cookie p{margin:0;font-size:.92rem;flex:1 1 380px;max-width:none}
.cookie a{color:var(--safety)}
.cookie-actions{display:flex;gap:10px;flex-wrap:wrap}
.cookie .btn{padding:10px 22px;min-height:44px;font-size:.9rem;letter-spacing:.06em;text-transform:uppercase;cursor:pointer;font-family:inherit}
.cookie .btn-reject{background:transparent;color:var(--white);border-color:#6B7B86}
.cookie .btn-accept{background:var(--safety);color:var(--ink);border-color:var(--safety)}
.linklike{background:none;border:0;padding:0;color:var(--safety);text-decoration:underline;cursor:pointer;font:inherit}
body:has(.cookie:not([hidden])){padding-bottom:110px}

/* Pie */
footer{background:var(--ink);color:#DCE3E8;padding:40px 0;font-size:.95rem}
footer a{color:var(--safety)}
footer h2{color:var(--white);font-size:1.1rem}
.disclaimer{border:2px solid var(--safety);padding:16px;border-radius:var(--r);margin-bottom:24px;color:var(--white)}

@media (max-width:820px){
  .hero .wrap{grid-template-columns:1fr}
  section{padding:44px 0}
  body{font-size:16px}
}
@media (prefers-reduced-motion:reduce){
  html{scroll-behavior:auto}*{transition:none!important}
}
</style>
</head>
<body>

<div class="notice" role="note">
  <div class="wrap"><strong>Aviso:</strong> Esta es una guía educativa de orientación independiente. No somos Banco LAFISE ni un banco, y no recibimos pagos ni transferencias.</div>
</div>

<header class="site-header">
  <div class="wrap">
    <a class="brand" href="#inicio"><?= e($SITE['brand']) ?><small><?= e($SITE['brand_note']) ?></small></a>
    <nav class="nav" aria-label="Secciones de la guía">
      <a href="#aclaracion">Quiénes somos</a>
      <a href="#buenas-practicas">Buenas prácticas</a>
      <a href="#pasos">Pasos</a>
      <a href="#proforma">Proforma</a>
      <a href="#lista">Lista</a>
      <a href="#glosario">Glosario</a>
      <a href="#faq">Preguntas</a>
      <a href="#contacto">Contacto</a>
    </nav>
  </div>
</header>

<?php if ($SITE['sponsor_name']): ?>
<div class="sponsor" role="region" aria-label="Datos del anunciante">
  <div class="wrap">
    <span class="sp-label">Patrocinado por</span>
    <div class="sp-box">
      <div><small>Patrocinador</small><strong><?= e($SITE['sponsor_name']) ?></strong></div>
      <?php if ($SITE['sponsor_id']): ?>
      <div><small><?= e($SITE['sponsor_id_label']) ?></small><strong><?= e($SITE['sponsor_id']) ?></strong></div>
      <?php endif; ?>
    </div>
    <em><?= e($SITE['sponsor_note']) ?></em>
  </div>
</div>
<?php endif; ?>

<main id="inicio">
  <section class="hero" aria-labelledby="h1">
    <div class="wrap">
      <div>
        <span class="tag">Guía educativa · Nicaragua</span>
        <h1 id="h1">Cómo usar Ferretería LAFISE de forma ordenada y sencilla</h1>
        <p class="lead">Una guía de orientación para que compre, consulte y conserve sus documentos con orden. Le explicamos buenas prácticas de uso paso a paso.</p>
        <p>Esta página solo educa y orienta. Las compras, pagos y reclamos se realizan directamente con la ferretería.</p>
        <div class="actions">
          <a class="btn btn-primary" href="#buenas-practicas">Leer la guía</a>
          <a class="btn btn-secondary" href="#pasos">Ver los pasos</a>
        </div>
      </div>
      <aside class="hero-card" aria-label="Aclaración importante">
        <h2>Lo que esta guía es y lo que no es</h2>
        <p style="margin:0">Esta guía ofrece contenido educativo y consejos de uso, y orienta sobre cómo acudir a Ferretería LAFISE. <strong>No somos Banco LAFISE Nicaragua</strong> ni un banco, <strong>no recibimos ni hacemos pagos o transferencias</strong>, y <strong>nunca pedimos claves, PIN, tarjetas ni datos bancarios</strong>.</p>
      </aside>
    </div>
  </section>

  <section id="aclaracion" class="alt" aria-labelledby="h-acl">
    <div class="wrap">
      <h2 id="h-acl">Qué es esta guía</h2>
      <p>Esta es una guía educativa independiente que orienta sobre el buen uso de Ferretería LAFISE en Nicaragua: cómo preparar su compra, qué conviene preguntar y qué documentos guardar. No somos Banco LAFISE ni un banco, no somos la ferretería, no tenemos afiliación ni autorización de LAFISE, no recibimos ni hacemos pagos o transferencias, y no procesamos compras, pedidos ni reclamos; para eso debe comunicarse directamente con Ferretería LAFISE.</p>
    </div>
  </section>

  <section id="buenas-practicas" aria-labelledby="h-bp">
    <div class="wrap">
      <h2 id="h-bp">Buenas prácticas para el cliente</h2>
      <div class="grid">
        <?php foreach ($buenas_practicas as $b): ?>
          <article class="card"><h3><?= e($b[0]) ?></h3><p><?= e($b[1]) ?></p></article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section id="pasos" class="alt" aria-labelledby="h-pasos">
    <div class="wrap">
      <h2 id="h-pasos">Una compra ordenada, paso a paso</h2>
      <ol class="steps">
        <?php foreach ($pasos as $p): ?>
          <li><div><h3><?= e($p[0]) ?></h3><p><?= e($p[1]) ?></p></div></li>
        <?php endforeach; ?>
      </ol>
    </div>
  </section>

  <section id="calcular" aria-labelledby="h-calc">
    <div class="wrap">
      <h2 id="h-calc">Cómo calcular lo que necesita</h2>
      <p>Comprar bien empieza antes de llegar a la ferretería. Estas ideas le enseñan a pedir lo correcto y a evitar viajes o gastos repetidos.</p>
      <div class="grid"><?php cards($calcular); ?></div>
    </div>
  </section>

  <section id="proforma" class="alt" aria-labelledby="h-prof">
    <div class="wrap">
      <h2 id="h-prof">Aprenda a leer una proforma</h2>
      <p>Una proforma bien entendida evita sorpresas. Estos son los puntos que conviene revisar línea por línea.</p>
      <div class="grid"><?php cards($leer_proforma); ?></div>
    </div>
  </section>

  <section id="uso" aria-labelledby="h-uso">
    <div class="wrap">
      <h2 id="h-uso">Uso responsable de herramientas y materiales</h2>
      <p>Usar bien lo que compra protege su trabajo y a las personas a su alrededor. Siga siempre las instrucciones del fabricante.</p>
      <div class="grid"><?php cards($uso_responsable); ?></div>
    </div>
  </section>

  <section id="garantia" class="alt" aria-labelledby="h-gar">
    <div class="wrap">
      <h2 id="h-gar">Preguntas útiles sobre cambios y garantías</h2>
      <p>Las condiciones las define la ferretería, no esta guía. Estas preguntas le ayudan a conocerlas antes de pagar.</p>
      <div class="panel"><ul class="qlist"><?php foreach ($preguntas_garantia as $q): ?><li><?= e($q) ?></li><?php endforeach; ?></ul></div>
    </div>
  </section>

  <section id="lista" aria-labelledby="h-lista">
    <div class="wrap">
      <h2 id="h-lista">Lista de verificación</h2>
      <p class="hint">Marque a medida que avanza. Las marcas no se guardan: si recarga la página, se borran.</p>
      <div class="grid">
        <div class="panel"><h3>Antes de ir</h3><?php checks($lista_antes); ?></div>
        <div class="panel"><h3>Después de comprar</h3><?php checks($lista_despues); ?></div>
      </div>
    </div>
  </section>

  <section id="glosario" class="alt" aria-labelledby="h-glos">
    <div class="wrap">
      <h2 id="h-glos">Glosario sencillo</h2>
      <dl class="glos">
        <?php foreach ($glosario as $g): ?>
          <div><dt><?= e($g[0]) ?></dt><dd><?= e($g[1]) ?></dd></div>
        <?php endforeach; ?>
      </dl>
    </div>
  </section>

  <section id="faq" aria-labelledby="h-faq">
    <div class="wrap">
      <h2 id="h-faq">Preguntas frecuentes</h2>
      <?php foreach ($faq as $i => $f): ?>
        <details<?= $i === 0 ? ' open' : '' ?>>
          <summary><?= e($f[0]) ?></summary>
          <div class="ans"><p><?= e($f[1]) ?></p></div>
        </details>
      <?php endforeach; ?>
    </div>
  </section>

  <section id="contacto" class="alt" aria-labelledby="h-ct">
    <div class="wrap">
      <h2 id="h-ct">Contacto de esta guía</h2>
      <p>Para dudas sobre el contenido de esta guía. Para compras, pagos o reclamos, comuníquese con Ferretería LAFISE.</p>
      <?php if ($SITE['contact_email'] || $SITE['contact_phone']): ?>
        <div class="actions">
          <?php if ($SITE['contact_email']): ?><a class="btn btn-secondary" href="mailto:<?= e($SITE['contact_email']) ?>">Escribir por correo</a><?php endif; ?>
          <?php if ($SITE['contact_phone']): ?><a class="btn btn-secondary" href="tel:<?= e($phone_href) ?>">Llamar a la guía</a><?php endif; ?>
        </div>
        <p style="margin-top:12px"><small>Por este medio tampoco recibimos pagos.</small></p>
      <?php else: ?>
        <p class="pending"><strong>PENDIENTE:</strong> agregue correo, teléfono o WhatsApp de esta guía en <code>$SITE</code>. Este aviso desaparece al completarlos.</p>
      <?php endif; ?>
    </div>
  </section>
</main>

<footer>
  <div class="wrap">
    <div class="disclaimer" role="note">
      <strong>Aviso legal importante:</strong> Este sitio es una guía de orientación independiente. No somos Banco LAFISE, no somos un banco, no somos Ferretería LAFISE y no representamos a ninguna de esas entidades. No recibimos transferencias bancarias ni ningún tipo de pagos, ni efectuamos pagos. Las marcas mencionadas pertenecen a sus respectivos titulares y se citan solo con fines educativos y de referencia.
    </div>
    <h2><?= e($SITE['brand']) ?></h2>
    <p>Responsable de esta guía: <?= e($SITE['owner_name']) ?></p>
    <?php if ($SITE['legal_links']): ?>
      <p><?php foreach ($SITE['legal_links'] as $t => $u): ?><a href="<?= e($u) ?>"><?= e($t) ?></a> &nbsp; <?php endforeach; ?></p>
    <?php else: ?>
      <p><small>PENDIENTE: agregar política de privacidad y términos antes de publicar.</small></p>
    <?php endif; ?>
    <?php if ($SITE['gtm_id'] || $SITE['ads_id'] || $SITE['banner_preview']): ?>
    <div id="cookies">
      <h2>Cookies y medición</h2>
      <p>Solo si usted acepta, esta página carga Google Tag Manager y las etiquetas de medición de Google Ads que tenga configuradas, para medir la efectividad de los anuncios. Si rechaza, no se carga ninguna etiqueta de medición ni publicidad. Su elección se guarda en este navegador y puede cambiarla cuando quiera.</p>
      <p><button type="button" class="linklike" id="cookie-prefs">Cambiar preferencias de cookies</button></p>
    </div>
    <?php endif; ?>
    <p><small>&copy; <?= date('Y') ?> <?= e($SITE['brand']) ?>. Contenido educativo, sin garantía de resultados.</small></p>
  </div>
</footer>

<?php if ($SITE['gtm_id'] || $SITE['ads_id'] || $SITE['banner_preview']): ?>
<div class="cookie" id="cookie-banner" role="dialog" aria-label="Preferencias de privacidad" hidden>
  <div class="wrap">
    <p><strong>Preferencias de privacidad.</strong> Si aceptas, usamos cookies de Google Ads para medir la efectividad de nuestros anuncios. Si rechazas, no se carga ninguna etiqueta de medición ni publicidad. <a href="#cookies">Más información</a>.</p>
    <div class="cookie-actions">
      <button type="button" class="btn btn-reject" id="cookie-reject">Rechazar</button>
      <button type="button" class="btn btn-accept" id="cookie-accept">Aceptar</button>
    </div>
  </div>
</div>
<script>
(function () {
  var GTM_ID = <?= json_encode($SITE['gtm_id']) ?>;   // Google Tag Manager (prioridad)
  var ADS_ID = <?= json_encode($SITE['ads_id']) ?>;   // gtag.js directo, solo si no hay GTM
  // Si ambos están vacíos, no se carga nada.
  var KEY = 'cookie_consent_v1', loaded = false;
  var banner = document.getElementById('cookie-banner');
  function get() { try { return localStorage.getItem(KEY); } catch (e) { return null; } }
  function set(v) { try { localStorage.setItem(KEY, v); } catch (e) {} }
  function loadAds() {
    if (loaded || !(GTM_ID || ADS_ID)) return;
    loaded = true;
    window.dataLayer = window.dataLayer || [];
    var s = document.createElement('script');
    s.async = true;
    if (GTM_ID) {
      dataLayer.push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' });
      s.src = 'https://www.googletagmanager.com/gtm.js?id=' + encodeURIComponent(GTM_ID);
      document.head.appendChild(s);
    } else {
      s.src = 'https://www.googletagmanager.com/gtag/js?id=' + encodeURIComponent(ADS_ID);
      document.head.appendChild(s);
      window.gtag = function () { dataLayer.push(arguments); };
      gtag('js', new Date());
      gtag('config', ADS_ID);
    }
  }
  document.getElementById('cookie-accept').addEventListener('click', function () {
    set('accepted'); banner.hidden = true; loadAds();
  });
  document.getElementById('cookie-reject').addEventListener('click', function () {
    set('rejected'); banner.hidden = true;
    if (loaded) location.reload();   // detiene la etiqueta ya cargada
  });
  var prefs = document.getElementById('cookie-prefs');
  if (prefs) prefs.addEventListener('click', function () { banner.hidden = false; });
  var saved = get();
  if (saved === 'accepted') loadAds();
  else if (saved === null) banner.hidden = false;
})();
</script>
<?php endif; ?>

</body>
</html>
