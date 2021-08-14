<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><title>Laravel</title><style>
/* cspell:disable-file */
/* webkit printing magic: print all background colors */
html {
	-webkit-print-color-adjust: exact;
}
* {
	box-sizing: border-box;
	-webkit-print-color-adjust: exact;
}

html,
body {
	margin: 0;
	padding: 0;
}
@media only screen {
	body {
		margin: 2em auto;
		max-width: 900px;
		color: rgb(55, 53, 47);
	}
}

body {
	line-height: 1.5;
	white-space: pre-wrap;
}

a,
a.visited {
	color: inherit;
	text-decoration: underline;
}

.pdf-relative-link-path {
	font-size: 80%;
	color: #444;
}

h1,
h2,
h3 {
	letter-spacing: -0.01em;
	line-height: 1.2;
	font-weight: 600;
	margin-bottom: 0;
}

.page-title {
	font-size: 2.5rem;
	font-weight: 700;
	margin-top: 0;
	margin-bottom: 0.75em;
}

h1 {
	font-size: 1.875rem;
	margin-top: 1.875rem;
}

h2 {
	font-size: 1.5rem;
	margin-top: 1.5rem;
}

h3 {
	font-size: 1.25rem;
	margin-top: 1.25rem;
}

.source {
	border: 1px solid #ddd;
	border-radius: 3px;
	padding: 1.5em;
	word-break: break-all;
}

.callout {
	border-radius: 3px;
	padding: 1rem;
}

figure {
	margin: 1.25em 0;
	page-break-inside: avoid;
}

figcaption {
	opacity: 0.5;
	font-size: 85%;
	margin-top: 0.5em;
}

mark {
	background-color: transparent;
}

.indented {
	padding-left: 1.5em;
}

hr {
	background: transparent;
	display: block;
	width: 100%;
	height: 1px;
	visibility: visible;
	border: none;
	border-bottom: 1px solid rgba(55, 53, 47, 0.09);
}

img {
	max-width: 100%;
}

@media only print {
	img {
		max-height: 100vh;
		object-fit: contain;
	}
}

@page {
	margin: 1in;
}

.collection-content {
	font-size: 0.875rem;
}

.column-list {
	display: flex;
	justify-content: space-between;
}

.column {
	padding: 0 1em;
}

.column:first-child {
	padding-left: 0;
}

.column:last-child {
	padding-right: 0;
}

.table_of_contents-item {
	display: block;
	font-size: 0.875rem;
	line-height: 1.3;
	padding: 0.125rem;
}

.table_of_contents-indent-1 {
	margin-left: 1.5rem;
}

.table_of_contents-indent-2 {
	margin-left: 3rem;
}

.table_of_contents-indent-3 {
	margin-left: 4.5rem;
}

.table_of_contents-link {
	text-decoration: none;
	opacity: 0.7;
	border-bottom: 1px solid rgba(55, 53, 47, 0.18);
}

table,
th,
td {
	border: 1px solid rgba(55, 53, 47, 0.09);
	border-collapse: collapse;
}

table {
	border-left: none;
	border-right: none;
}

th,
td {
	font-weight: normal;
	padding: 0.25em 0.5em;
	line-height: 1.5;
	min-height: 1.5em;
	text-align: left;
}

th {
	color: rgba(55, 53, 47, 0.6);
}

ol,
ul {
	margin: 0;
	margin-block-start: 0.6em;
	margin-block-end: 0.6em;
}

li > ol:first-child,
li > ul:first-child {
	margin-block-start: 0.6em;
}

ul > li {
	list-style: disc;
}

ul.to-do-list {
	text-indent: -1.7em;
}

ul.to-do-list > li {
	list-style: none;
}

.to-do-children-checked {
	text-decoration: line-through;
	opacity: 0.375;
}

ul.toggle > li {
	list-style: none;
}

ul {
	padding-inline-start: 1.7em;
}

ul > li {
	padding-left: 0.1em;
}

ol {
	padding-inline-start: 1.6em;
}

ol > li {
	padding-left: 0.2em;
}

.mono ol {
	padding-inline-start: 2em;
}

.mono ol > li {
	text-indent: -0.4em;
}

.toggle {
	padding-inline-start: 0em;
	list-style-type: none;
}

/* Indent toggle children */
.toggle > li > details {
	padding-left: 1.7em;
}

.toggle > li > details > summary {
	margin-left: -1.1em;
}

.selected-value {
	display: inline-block;
	padding: 0 0.5em;
	background: rgba(206, 205, 202, 0.5);
	border-radius: 3px;
	margin-right: 0.5em;
	margin-top: 0.3em;
	margin-bottom: 0.3em;
	white-space: nowrap;
}

.collection-title {
	display: inline-block;
	margin-right: 1em;
}

time {
	opacity: 0.5;
}

.icon {
	display: inline-block;
	max-width: 1.2em;
	max-height: 1.2em;
	text-decoration: none;
	vertical-align: text-bottom;
	margin-right: 0.5em;
}

img.icon {
	border-radius: 3px;
}

.user-icon {
	width: 1.5em;
	height: 1.5em;
	border-radius: 100%;
	margin-right: 0.5rem;
}

.user-icon-inner {
	font-size: 0.8em;
}

.text-icon {
	border: 1px solid #000;
	text-align: center;
}

.page-cover-image {
	display: block;
	object-fit: cover;
	width: 100%;
	height: 30vh;
}

.page-header-icon {
	font-size: 3rem;
	margin-bottom: 1rem;
}

.page-header-icon-with-cover {
	margin-top: -0.72em;
	margin-left: 0.07em;
}

.page-header-icon img {
	border-radius: 3px;
}

.link-to-page {
	margin: 1em 0;
	padding: 0;
	border: none;
	font-weight: 500;
}

p > .user {
	opacity: 0.5;
}

td > .user,
td > time {
	white-space: nowrap;
}

input[type="checkbox"] {
	transform: scale(1.5);
	margin-right: 0.6em;
	vertical-align: middle;
}

p {
	margin-top: 0.5em;
	margin-bottom: 0.5em;
}

.image {
	border: none;
	margin: 1.5em 0;
	padding: 0;
	border-radius: 0;
	text-align: center;
}

.code,
code {
	background: rgba(135, 131, 120, 0.15);
	border-radius: 3px;
	padding: 0.2em 0.4em;
	border-radius: 3px;
	font-size: 85%;
	tab-size: 2;
}

code {
	color: #eb5757;
}

.code {
	padding: 1.5em 1em;
}

.code-wrap {
	white-space: pre-wrap;
	word-break: break-all;
}

.code > code {
	background: none;
	padding: 0;
	font-size: 100%;
	color: inherit;
}

blockquote {
	font-size: 1.25em;
	margin: 1em 0;
	padding-left: 1em;
	border-left: 3px solid rgb(55, 53, 47);
}

.bookmark {
	text-decoration: none;
	max-height: 8em;
	padding: 0;
	display: flex;
	width: 100%;
	align-items: stretch;
}

.bookmark-title {
	font-size: 0.85em;
	overflow: hidden;
	text-overflow: ellipsis;
	height: 1.75em;
	white-space: nowrap;
}

.bookmark-text {
	display: flex;
	flex-direction: column;
}

.bookmark-info {
	flex: 4 1 180px;
	padding: 12px 14px 14px;
	display: flex;
	flex-direction: column;
	justify-content: space-between;
}

.bookmark-image {
	width: 33%;
	flex: 1 1 180px;
	display: block;
	position: relative;
	object-fit: cover;
	border-radius: 1px;
}

.bookmark-description {
	color: rgba(55, 53, 47, 0.6);
	font-size: 0.75em;
	overflow: hidden;
	max-height: 4.5em;
	word-break: break-word;
}

.bookmark-href {
	font-size: 0.75em;
	margin-top: 0.25em;
}

.sans { font-family: ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol"; }
.code { font-family: "SFMono-Regular", Menlo, Consolas, "PT Mono", "Liberation Mono", Courier, monospace; }
.serif { font-family: Lyon-Text, Georgia, ui-serif, serif; }
.mono { font-family: iawriter-mono, Nitti, Menlo, Courier, monospace; }
.pdf .sans { font-family: Inter, ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol", 'Twemoji', 'Noto Color Emoji', 'Noto Sans CJK JP'; }
.pdf:lang(zh-CN) .sans { font-family: Inter, ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol", 'Twemoji', 'Noto Color Emoji', 'Noto Sans CJK SC'; }
.pdf:lang(zh-TW) .sans { font-family: Inter, ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol", 'Twemoji', 'Noto Color Emoji', 'Noto Sans CJK TC'; }
.pdf:lang(ko-KR) .sans { font-family: Inter, ui-sans-serif, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol", 'Twemoji', 'Noto Color Emoji', 'Noto Sans CJK KR'; }
.pdf .code { font-family: Source Code Pro, "SFMono-Regular", Menlo, Consolas, "PT Mono", "Liberation Mono", Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK JP'; }
.pdf:lang(zh-CN) .code { font-family: Source Code Pro, "SFMono-Regular", Menlo, Consolas, "PT Mono", "Liberation Mono", Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK SC'; }
.pdf:lang(zh-TW) .code { font-family: Source Code Pro, "SFMono-Regular", Menlo, Consolas, "PT Mono", "Liberation Mono", Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK TC'; }
.pdf:lang(ko-KR) .code { font-family: Source Code Pro, "SFMono-Regular", Menlo, Consolas, "PT Mono", "Liberation Mono", Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK KR'; }
.pdf .serif { font-family: PT Serif, Lyon-Text, Georgia, ui-serif, serif, 'Twemoji', 'Noto Color Emoji', 'Noto Serif CJK JP'; }
.pdf:lang(zh-CN) .serif { font-family: PT Serif, Lyon-Text, Georgia, ui-serif, serif, 'Twemoji', 'Noto Color Emoji', 'Noto Serif CJK SC'; }
.pdf:lang(zh-TW) .serif { font-family: PT Serif, Lyon-Text, Georgia, ui-serif, serif, 'Twemoji', 'Noto Color Emoji', 'Noto Serif CJK TC'; }
.pdf:lang(ko-KR) .serif { font-family: PT Serif, Lyon-Text, Georgia, ui-serif, serif, 'Twemoji', 'Noto Color Emoji', 'Noto Serif CJK KR'; }
.pdf .mono { font-family: PT Mono, iawriter-mono, Nitti, Menlo, Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK JP'; }
.pdf:lang(zh-CN) .mono { font-family: PT Mono, iawriter-mono, Nitti, Menlo, Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK SC'; }
.pdf:lang(zh-TW) .mono { font-family: PT Mono, iawriter-mono, Nitti, Menlo, Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK TC'; }
.pdf:lang(ko-KR) .mono { font-family: PT Mono, iawriter-mono, Nitti, Menlo, Courier, monospace, 'Twemoji', 'Noto Color Emoji', 'Noto Sans Mono CJK KR'; }
.highlight-default {
}
.highlight-gray {
	color: rgb(155,154,151);
}
.highlight-brown {
	color: rgb(100,71,58);
}
.highlight-orange {
	color: rgb(217,115,13);
}
.highlight-yellow {
	color: rgb(223,171,1);
}
.highlight-teal {
	color: rgb(15,123,108);
}
.highlight-blue {
	color: rgb(11,110,153);
}
.highlight-purple {
	color: rgb(105,64,165);
}
.highlight-pink {
	color: rgb(173,26,114);
}
.highlight-red {
	color: rgb(224,62,62);
}
.highlight-gray_background {
	background: rgb(235,236,237);
}
.highlight-brown_background {
	background: rgb(233,229,227);
}
.highlight-orange_background {
	background: rgb(250,235,221);
}
.highlight-yellow_background {
	background: rgb(251,243,219);
}
.highlight-teal_background {
	background: rgb(221,237,234);
}
.highlight-blue_background {
	background: rgb(221,235,241);
}
.highlight-purple_background {
	background: rgb(234,228,242);
}
.highlight-pink_background {
	background: rgb(244,223,235);
}
.highlight-red_background {
	background: rgb(251,228,228);
}
.block-color-default {
	color: inherit;
	fill: inherit;
}
.block-color-gray {
	color: rgba(55, 53, 47, 0.6);
	fill: rgba(55, 53, 47, 0.6);
}
.block-color-brown {
	color: rgb(100,71,58);
	fill: rgb(100,71,58);
}
.block-color-orange {
	color: rgb(217,115,13);
	fill: rgb(217,115,13);
}
.block-color-yellow {
	color: rgb(223,171,1);
	fill: rgb(223,171,1);
}
.block-color-teal {
	color: rgb(15,123,108);
	fill: rgb(15,123,108);
}
.block-color-blue {
	color: rgb(11,110,153);
	fill: rgb(11,110,153);
}
.block-color-purple {
	color: rgb(105,64,165);
	fill: rgb(105,64,165);
}
.block-color-pink {
	color: rgb(173,26,114);
	fill: rgb(173,26,114);
}
.block-color-red {
	color: rgb(224,62,62);
	fill: rgb(224,62,62);
}
.block-color-gray_background {
	background: rgb(235,236,237);
}
.block-color-brown_background {
	background: rgb(233,229,227);
}
.block-color-orange_background {
	background: rgb(250,235,221);
}
.block-color-yellow_background {
	background: rgb(251,243,219);
}
.block-color-teal_background {
	background: rgb(221,237,234);
}
.block-color-blue_background {
	background: rgb(221,235,241);
}
.block-color-purple_background {
	background: rgb(234,228,242);
}
.block-color-pink_background {
	background: rgb(244,223,235);
}
.block-color-red_background {
	background: rgb(251,228,228);
}
.select-value-color-default { background-color: rgba(206,205,202,0.5); }
.select-value-color-gray { background-color: rgba(155,154,151, 0.4); }
.select-value-color-brown { background-color: rgba(140,46,0,0.2); }
.select-value-color-orange { background-color: rgba(245,93,0,0.2); }
.select-value-color-yellow { background-color: rgba(233,168,0,0.2); }
.select-value-color-green { background-color: rgba(0,135,107,0.2); }
.select-value-color-blue { background-color: rgba(0,120,223,0.2); }
.select-value-color-purple { background-color: rgba(103,36,222,0.2); }
.select-value-color-pink { background-color: rgba(221,0,129,0.2); }
.select-value-color-red { background-color: rgba(255,0,26,0.2); }

.checkbox {
	display: inline-flex;
	vertical-align: text-bottom;
	width: 16;
	height: 16;
	background-size: 16px;
	margin-left: 2px;
	margin-right: 5px;
}

.checkbox-on {
	background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2216%22%20height%3D%2216%22%20viewBox%3D%220%200%2016%2016%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%3Crect%20width%3D%2216%22%20height%3D%2216%22%20fill%3D%22%2358A9D7%22%2F%3E%0A%3Cpath%20d%3D%22M6.71429%2012.2852L14%204.9995L12.7143%203.71436L6.71429%209.71378L3.28571%206.2831L2%207.57092L6.71429%2012.2852Z%22%20fill%3D%22white%22%2F%3E%0A%3C%2Fsvg%3E");
}

.checkbox-off {
	background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2216%22%20height%3D%2216%22%20viewBox%3D%220%200%2016%2016%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%0A%3Crect%20x%3D%220.75%22%20y%3D%220.75%22%20width%3D%2214.5%22%20height%3D%2214.5%22%20fill%3D%22white%22%20stroke%3D%22%2336352F%22%20stroke-width%3D%221.5%22%2F%3E%0A%3C%2Fsvg%3E");
}
	
</style></head><body><article id="93157005-6c0b-41bb-8383-86b8fa59be17" class="page sans"><header><img class="page-cover-image" src="https://openexpoeurope.com/wp-content/uploads/2021/02/Laravel-Portada.jpg" style="object-position:center 50%"/><div class="page-header-icon page-header-icon-with-cover"><span class="icon">💥</span></div><h1 class="page-title">Laravel</h1></header><div class="page-body"><p id="cd004212-db8a-4de6-bd3a-5876fc748f0d" class="">
</p><hr id="64ed0068-7a47-4697-be59-c289a9d83ae4"/><blockquote id="44d939c3-3a12-43ee-a74b-aaf5e4506016" class="">Tutorial: <a href="https://www.youtube.com/watch?v=2pppMAtIlro&amp;list=PLZ2ovOgdI-kWWS9aq8mfUDkJRfYib-SvF">https://www.youtube.com/watch?v=2pppMAtIlro&amp;list=PLZ2ovOgdI-kWWS9aq8mfUDkJRfYib-SvF</a>
video: 17</blockquote><hr id="77357117-0a14-4ccd-879a-6d9022eb9974"/><p id="b5273e27-9599-436a-ae72-589325881e3b" class="">Previamente debemos tener instalado <span style="border-bottom:0.05em solid"><strong><em>composer</em></strong></span>  en nuestro sistema operativo.</p><h1 id="c381491d-e94f-4e54-84a5-117ac2fa2523" class="">Creando un proyecto con laravel</h1><ul id="6cc1441c-8096-4649-aa17-b4ee67370b22" class="toggle"><li><details open=""><summary>click aqui</summary><ol type="1" id="5fbcba68-d0c7-4196-9181-2b6b56c24da1" class="numbered-list" start="1"><li>ubicarnos en nuestra carpeta donde guardaremos nuestro proyecto <code>C:\xampp\htdocs\laravel</code></li></ol><ol type="1" id="5c919554-fb54-4c2f-8ff5-db31ccbe2b61" class="numbered-list" start="2"><li>ejecutar:<pre id="7b821468-d073-40d5-841c-e60eb173b897" class="code"><code>composer global require laravel/installer</code></pre><p id="fc23f771-dd19-44a8-a453-a6e7d2b57cf2" class="">este comando instala laravel en la carpeta <code>laravel</code> que cree porque ahi estarán todos mis proyectos con laravel.</p></li></ol><ol type="1" id="78367917-cc85-4a77-b5e1-6eeadd0adb4c" class="numbered-list" start="3"><li>para crear un proyecto con laravel:<pre id="bbefa3fb-ff43-4e7f-b441-e39adb3ccd39" class="code"><code>laravel new &quot;nombre de mi proyecto&quot;</code></pre><p id="96e8d151-5aca-471f-8557-7d805dc84cce" class="">y enter.</p></li></ol></details></li></ul><h1 id="7e5c3449-bf3e-42d1-a617-ffa1cc54c60c" class="">Host virtual</h1><ul id="f1b402bf-5f6b-4820-9193-069b7e8f968a" class="toggle"><li><details open=""><summary>click <em>aqui</em></summary><p id="4c093f48-1647-49be-91ef-ca267434a92f" class="">no dirigimos a esta ruta</p><pre id="b5efac5b-f954-4b57-acf7-b4c33403b8f4" class="code"><code>C:\Windows\System32\drivers\etc</code></pre><p id="f3a15f0b-dafd-45c1-8117-7265014c1c4c" class="">abrimos el archivo <code>hosts</code>con el bloc de notas o notepadd</p><ul id="08436714-a0a3-4aae-a93b-2cc703003494" class="toggle"><li><details open=""><summary>imagen de ejemplo</summary><figure id="3dfcd353-da13-48f4-aa74-b4227ce493e4" class="image"><a href="Laravel%203dfcd353da1348f4aa74b4227ce493e4/Untitled.png"><img style="width:627px" src="Laravel%203dfcd353da1348f4aa74b4227ce493e4/Untitled.png"/></a></figure><p id="08677ae7-efe4-4438-9bbc-61ee6ab51c19" class="">
</p></details></li></ul><p id="8b1563e9-1adb-4892-a3fe-c24be3fe18b2" class="">agregamos la siguiente linea: puedes poner el nombre que desees y la extensión que gustes.</p><pre id="88b1f6bb-a61b-4c48-b6f2-f3b7f9dd6c0d" class="code"><code>127.0.0.1      name.test</code></pre><p id="df74efa4-1cfe-4d07-ae3f-e01a5aef061a" class="">ahora apuntaremos el dominio que creamos a nuestro proyecto, copiamos la ruta de nuestro proyecto</p><pre id="fe6bd82b-f968-41e7-aaa7-1a0e1c168c55" class="code"><code>C:\xampp\htdocs\laravel\blog\public</code></pre><p id="074d0e60-cd17-4ba8-814e-5f1bf0743ade" class="">ahora vamos a la siguiente ruta y abrimos el archivo <code>httpd-vhosts.conf</code> </p><pre id="ba0e0a6e-53ac-47e8-aa04-85cadfaa50e7" class="code"><code>C:\xampp\apache\conf\extra</code></pre><p id="87b0f68d-eba3-4607-8d58-9201cb7b82fa" class="">una vez abierto la el archivo <code>httpd-vhosts.conf</code> pegamos lo </p><pre id="0d7537cb-4a4f-4afa-b14a-b93f42083655" class="code"><code>NameVirtualHost *
&lt;VirtualHost *&gt;
	DocumentRoot &quot;C:\xampp\htdocs&quot;
	ServerName localhost
&lt;/VirtualHost&gt;
&lt;VirtualHost *&gt;
	DocumentRoot &quot;pega la ruta de tu proyecto aqui&quot;
	ServerName blog.test
	&lt;Directory &quot;pega la ruta de tu proyecto aqui &quot;&gt;
		Options All
		AllowOverride All
		Require all granted
	&lt;/Directory&gt;
&lt;/VirtualHost&gt;</code></pre><p id="849d2103-c0a8-4347-8798-0d607b858fb2" class="">en lo que pegamos reemplazamos la ruta y en <code>servername</code> ponemos el dominio que creamos.</p><ul id="c2abc507-ff46-4951-b6e8-7d13b73cd225" class="toggle"><li><details open=""><summary>imagen de ejemplo</summary><figure id="1a1fa34a-a290-4cdf-9af3-6af8869e7b78" class="image"><a href="Laravel%203dfcd353da1348f4aa74b4227ce493e4/Untitled%201.png"><img style="width:486px" src="Laravel%203dfcd353da1348f4aa74b4227ce493e4/Untitled%201.png"/></a></figure></details></li></ul></details></li></ul><h1 id="fdcfd4f1-27a6-428c-bea2-c4d4a9910d28" class="">Rutas</h1><ul id="de392358-37bb-4680-a2f1-9658a3d079e6" class="toggle"><li><details open=""><summary>click aqui</summary><p id="60c27b99-c90a-4940-867d-8ea9793bebcc" class="">esta ruta muestra inicialmente todas las carpetas del proyecto<div class="indented"><p id="5ee0a309-d30a-4351-95a6-06d843d443b8" class=""><code>localhost/laravel/blog</code></p><p id="26915d93-e235-4461-ab7f-9bc233e51aa6" class="">
</p></div></p><p id="626053a1-b65e-4c43-b4f1-16cda781672e" class="">1.Para ver la pagina de inicio es la ruta siguiente: /public</p><p id="8f5eef09-a0ac-4759-ad4d-f99c87c1d197" class=""><code>localhost/laravel/blog/public</code></p><p id="888366a6-fcfa-42c3-842e-93f30946edcf" class="">
</p><p id="83d9321b-f0dd-4f71-a5ae-f8e138081349" class="">2.para definir las rutas de acceso es en:<div class="indented"><p id="ad700878-4a09-4219-b1b8-f380bd12ac31" class=""><code>localhost/laravel/blog/routes</code></p><p id="ab2bce53-788a-4bc6-a428-52b8da550fa0" class="">en el archivo <mark class="highlight-teal"><code>web.php</code></mark></p><pre id="af6a0070-5f2a-463b-b2b7-088598b8d951" class="code"><code>Route::get(&#x27;/&#x27;, HomeController::class);

Route::get(&#x27;cursos&#x27;, [CursoController::class, &#x27;index&#x27;]);

Route::get(&#x27;cursos/create&#x27;, [CursoController::class, &#x27;create&#x27;]);

Route::get(&#x27;cursos/{curso}/{categoria?}&#x27;,  [CursoController::class, &#x27;show&#x27;]);</code></pre></div></p><p id="92f8a6cb-6bd7-4bbc-93a4-9f62246b9922" class="">3.las vistas en:<div class="indented"><p id="91d7dc7f-5efb-40c2-88f1-ded51b32697c" class=""><code>localhost/laravel/blog/resources/views</code></p><p id="80a1aa2a-07c7-4139-b7ee-41cde9949803" class="">aquí crearas todas tus vistas</p><p id="fe2f512c-5990-4c98-b7bf-09ea17e72b68" class="">
</p></div></p><p id="298c4669-8e4f-420f-afb5-9be93bab6f16" class="">4.los controladores en:<div class="indented"><p id="b4a0ad92-db2f-40e8-845c-0dd93e35a6c2" class=""><code>localhost/laravel/blog/app/Http/Controlllers</code></p><p id="b542cb79-c4b4-4b1a-bc73-b19506cf818d" class="">dentro podemos crear los controladores de manera manual o por consola.</p><p id="3e836098-1ecd-4820-9485-86354e2fa124" class=""><em>por consola:</em><div class="indented"><pre id="e33f5efe-974b-40ac-8026-a61a603d6ffd" class="code"><code>php artisan make:controller NameController</code></pre><figure id="0aae01d9-3b17-47c7-9241-d6e5e879850d" class="image"><a href="Laravel%203dfcd353da1348f4aa74b4227ce493e4/Untitled%202.png"><img style="width:382px" src="Laravel%203dfcd353da1348f4aa74b4227ce493e4/Untitled%202.png"/></a></figure></div></p></div></p></details></li></ul><h1 id="d352b8d6-0a3a-435b-b382-44370d4b9eb6" class="">Base de Datos</h1><ul id="be205471-a054-4d7b-8eeb-149f369f2734" class="toggle"><li><details open=""><summary>click aqui</summary><p id="c0f17285-7ece-4db0-8a8f-c4325db35485" class="">en el archivo <code>.env</code> se modifica las variables</p><p id="f0afec17-1ce7-435f-b67c-8d19c6521317" class="">para crear tablas se hacen directamente en el codigo en la ruta:</p><pre id="e527199e-2a2a-43d1-a39c-04dcddd450a7" class="code"><code>http://localhost:/laravel/blog/databases/migrations</code></pre><figure id="0cb38dba-2dd9-4cb9-85a9-be3047190ee2" class="image"><a href="Laravel%203dfcd353da1348f4aa74b4227ce493e4/Untitled%203.png"><img style="width:660px" src="Laravel%203dfcd353da1348f4aa74b4227ce493e4/Untitled%203.png"/></a></figure><p id="a5d2d8ae-ca69-4cc4-9990-479d39f07d4b" class="">Para crear una tabla se usa </p><pre id="18da20f4-a1e1-46e2-925e-48251d797022" class="code"><code>Schema::create(&#x27;nameTable&#x27;, function (Blueprint $table) {
})</code></pre><p id="e9a618e4-ab2d-4e9f-87e5-6fe5ebcc52a4" class="">dentro se especifica los campos que contendrá:</p><pre id="ee878516-5ba5-4a1f-bb70-6f2c0cf4188a" class="code"><code>$table-&gt;id();//integer unsigned increment
$table-&gt;string(&#x27;name&#x27;);// almacena 255 caracteres
            //$table-&gt;text() almacena más de 255 caracteres
$table-&gt;string(&#x27;email&#x27;)-&gt;unique();//uniqque es para que sea unico
$table-&gt;timestamp(&#x27;email_verified_at&#x27;)-&gt;nullable();
$table-&gt;string(&#x27;password&#x27;);
$table-&gt;rememberToken();
$table-&gt;timestamps();//fecha de creacion o actualizacion de registro</code></pre><p id="d20cfb9e-ff6e-40a7-8045-e21ea44d0389" class="">ahora para que se cree estas tablas en nuestra bd deberemos de ejecutar el comando:</p><pre id="3cdd7667-a09f-4a3c-b86a-f24601a32321" class="code"><code>php artisan migrate</code></pre><p id="7c493f76-c81b-4b8d-a5e2-2891a84af667" class=""><mark class="highlight-yellow"><em>Nota: si te muestra algún error revisa y configura tu archivo .env</em></mark></p><figure id="c38bde67-1716-466e-b413-ffc564266e26" class="image"><a href="Laravel%203dfcd353da1348f4aa74b4227ce493e4/Untitled%204.png"><img style="width:270px" src="Laravel%203dfcd353da1348f4aa74b4227ce493e4/Untitled%204.png"/></a></figure><p id="20427714-5e29-4fea-a3b5-507ae6248701" class="">
</p></details></li></ul><h2 id="c1116851-8ac6-4a72-9798-900c4616b38b" class="">Crear mis propias tablas/migraciones</h2><ul id="98ea689d-b0c3-422b-8a4d-77edd522681b" class="toggle"><li><details open=""><summary>click aqui</summary><h3 id="d9dd3914-fc06-4110-acb0-07f0fe2dbdb3" class="">concepto: </h3><p id="2714d388-affc-4d2d-b511-f9d3e0b3de95" class="block-color-teal"><em>Una migración es un conjunto de acciones que se llevaran acabo, es nuestro caso es la creación, modificación o eliminación de tablas, columnas, propiedades, etc.</em></p><p id="9bf026b5-ecf6-419c-950c-bd5421a3ff6b" class="block-color-teal"><em>Para ello se emplea las migraciones, una migración es como el control de versiones que dentro de cada migración podremos crear todas las tablas que deseemos.</em></p><p id="4be37091-63d5-4bcf-a961-4d20f3f4935f" class="">para crear nuestras propias migraciones usaremos el comando</p><pre id="7996b1ea-f541-48a5-8e53-a562e777e432" class="code"><code>php artisan make:migration create_name_table</code></pre><p id="297b0453-2eed-4ba1-9a8d-f5f806d33615" class="">del cual el campo <code>name</code> es el nombre que llevará nuestro archivo de migración.</p><figure id="5be9c9f3-cba1-4e92-96f3-07f9d5c2729f" class="image"><a href="Laravel%203dfcd353da1348f4aa74b4227ce493e4/Untitled%205.png"><img style="width:504px" src="Laravel%203dfcd353da1348f4aa74b4227ce493e4/Untitled%205.png"/></a></figure><p id="df851cb7-3b0b-49b7-84e8-31f178b6ea38" class="">una vez creada la migración podremos crear nuestra tabla.</p><figure id="1ebcf8a0-a867-4c83-b081-3e57a675c916" class="image"><a href="Laravel%203dfcd353da1348f4aa74b4227ce493e4/Untitled%206.png"><img style="width:531px" src="Laravel%203dfcd353da1348f4aa74b4227ce493e4/Untitled%206.png"/></a></figure><p id="4ef2d41e-074a-4d29-8f35-5f28ca900aa4" class="">la función <code>down</code> elimina, en caso hubiera, una tabla con el mismo nombre de la tabla que creamos.</p><figure id="a63d82ef-4006-4a07-844e-29f28437cc0b" class="image"><a href="Laravel%203dfcd353da1348f4aa74b4227ce493e4/Untitled%207.png"><img style="width:309px" src="Laravel%203dfcd353da1348f4aa74b4227ce493e4/Untitled%207.png"/></a></figure><p id="38a9a9a8-5457-4e0e-a917-801b951a453e" class="">como ejemplo migramos la tabla cursos.</p><figure id="6a869c4b-1fa9-45ba-a99c-43227ee9e5e6" class="image"><a href="Laravel%203dfcd353da1348f4aa74b4227ce493e4/Untitled%208.png"><img style="width:402px" src="Laravel%203dfcd353da1348f4aa74b4227ce493e4/Untitled%208.png"/></a></figure></details></li></ul><h1 id="094e8840-bc43-4dce-a5d2-ffb68dbc3e61" class="">Eliminar tabla/migraciones</h1><ul id="5da31bba-43c4-44de-9126-b96894aea962" class="toggle"><li><details open=""><summary>click aqui</summary><p id="efa26d0a-81a6-4f75-b06f-65efc969f2b7" class="">si deseamos eliminar, revertir o desacer las tablas que he creado, deberemos ejecutar el siguiente comando:</p><pre id="b0f11b24-6540-419c-9675-68578a741e90" class="code"><code>php artisan migrate:rollback</code></pre><p id="f40e2b9e-a106-489c-9dd7-3ae14cdc098e" class="">esto eliminara las tablas creadas pero por lotes, que eso? pues al crear las primeras tablas se creo con el lote 1</p><figure id="b7d6e2a6-432e-4335-ab5c-353bd3d87375" class="image"><a href="Laravel%203dfcd353da1348f4aa74b4227ce493e4/Untitled%209.png"><img style="width:595px" src="Laravel%203dfcd353da1348f4aa74b4227ce493e4/Untitled%209.png"/></a></figure><p id="856fd848-3a05-4d48-9eb5-dc11ebd9e431" class="">despues de creadas esas tablas, creamos la migración de la tabla cursos, la cual se creo con el lote 2.</p><figure id="fb945f80-3064-4dff-b4c4-0fd80298f9d0" class="image"><a href="Laravel%203dfcd353da1348f4aa74b4227ce493e4/Untitled%2010.png"><img style="width:606px" src="Laravel%203dfcd353da1348f4aa74b4227ce493e4/Untitled%2010.png"/></a></figure><p id="d218472f-fe91-421c-a369-29e9c1772510" class="">si ejecutamos <code>php artisan migrate:rollback</code> se eliminaran las tablas del ultimo lote, en este caso la tabla cursos que es el lote 2, el cual es el ultimo lote.</p><figure id="51a3445e-1e68-4d43-90f1-72ca00e71794" class="image"><a href="Laravel%203dfcd353da1348f4aa74b4227ce493e4/Untitled%2011.png"><img style="width:456px" src="Laravel%203dfcd353da1348f4aa74b4227ce493e4/Untitled%2011.png"/></a></figure><figure id="5df81561-3852-4a3c-b787-f65698be6340" class="image"><a href="Laravel%203dfcd353da1348f4aa74b4227ce493e4/Untitled%2012.png"><img style="width:627px" src="Laravel%203dfcd353da1348f4aa74b4227ce493e4/Untitled%2012.png"/></a></figure></details></li></ul><h1 id="c3e16556-cee5-47e5-9639-baf3b99805a9" class="">Modificar tabla/migraciones</h1><ul id="e5aa1a88-1e80-4b05-86b5-284e78009923" class="toggle"><li><details open=""><summary>click aqui</summary><p id="fb36d6b0-a189-4807-9c9f-6261145f779e" class="">si a una tabla ya creada le modificamos alguno de sus campos y deseamos que se actualize ejecutamos el comando:</p><pre id="5dda9f9c-a3b5-4220-86b1-6db4d0e44c69" class="code"><code>php artisan migrate:fresh</code></pre><p id="ac9d8061-b971-4f75-87ad-f2c635b7444c" class=""><mark class="highlight-yellow"><strong><em>Nota</em></strong></mark><mark class="highlight-yellow"><em>: este comando es destructivo, osea si en la tabla tenemos datos y ejecutamos el comando anterior, los datos se eliminaran</em></mark><em>.</em></p><p id="0450b96d-a05c-4f57-9cfa-0a8850b8821a" class="">se recomienda emplear el comando</p><pre id="79ca5f00-ccbc-4d8d-a754-f4946e5ad437" class="code"><code>php artisan migrate:refresh</code></pre><p id="f4b6b33e-aac9-4eac-be20-281f9399512f" class="">cuando se quiera modificar tablas con datos existentes.</p></details></li></ul><h2 id="85732ed0-d27b-42da-b25e-cd3282182330" class="">Agregando un campo</h2><ul id="d6f2c87f-c3a9-4284-a455-c177bb949927" class="toggle"><li><details open=""><summary>click aqui</summary><p id="df3b2aee-a7c2-4d24-9f32-c06ac1c11a71" class="">creamos una migracion con un standar, para esto debemos de ser específicos, como agregaremos una columna le damos el nombre de <code>add</code> seguido del nombre de la <code>colum</code> luego debemos de agregar el <code>to</code> como estandar y el nombre de la tabla que modificaremos seguido de <code>table</code></p><pre id="ca20e092-1c39-4f32-b0f9-1b52b7b49052" class="code"><code>php artisan make:migration add_column_to_nameTable_table</code></pre><p id="70d5bd0e-45bc-4aa3-b510-83ff47bc734f" class="">luego dentro del metodo <code>up()</code> agregamos las columnas que deseamos y con <code>nullable()</code> le indicamos que aceptara campos vacios, con after le decimos donde se ubique la columna.</p><pre id="bcf7c12f-7c10-4745-add0-b34e55b8e3dc" class="code"><code>public function up()
    {
        Schema::table(&#x27;users&#x27;, function (Blueprint $table) {
            $table-&gt;string(&#x27;avatar&#x27;)-&gt;nullable()-&gt;after(&#x27;email&#x27;);
        });
    }</code></pre></details></li></ul><h2 id="ba15d45c-56e2-4133-ac2b-5bfae7ced2ae" class="">Modificar las propiedades de las columnas</h2><ul id="2f56927f-1f27-41c8-af83-bafc6b6322a7" class="toggle"><li><details open=""><summary>click aqui</summary><p id="ff7838de-e8c1-420f-a4cb-7cbc90a4f493" class="">para poder modificar las propiedades debemos de tener instalado una dependencia.</p><pre id="d68adf4d-51f7-4cc3-9edc-ccd6b0585dec" class="code"><code>composer require doctrine/dbal</code></pre><figure id="39c72e35-56d2-4715-b705-aebbf8042f28" class="image"><a href="Laravel%203dfcd353da1348f4aa74b4227ce493e4/Untitled%2013.png"><img style="width:490px" src="Laravel%203dfcd353da1348f4aa74b4227ce493e4/Untitled%2013.png"/></a></figure><p id="9c5c4500-3aa2-458a-82b1-579936675522" class="">y modificamos la columna sin olvidar agregar <code>change()</code> </p><pre id="79685547-1e2a-4103-bc0f-84ea2ed7065a" class="code"><code>Schema::table(&#x27;users&#x27;, function (Blueprint $table) {
            $table-&gt;string(&#x27;name&#x27;, 150)-&gt;change();
        });</code></pre><p id="3f834e1a-d9dc-4662-9e33-9611cfa8cda3" class="">y en el metodo <code>down()</code> agregamos el estado inicial</p><pre id="83293790-a51e-489a-a1eb-71176dc58ffd" class="code"><code>public function down()
    {
        Schema::table(&#x27;users&#x27;, function (Blueprint $table) {
            $table-&gt;string(&#x27;name&#x27;, 255)-&gt;change();
        });
    }</code></pre></details></li></ul><h1 id="e8291ce1-36ae-49ba-b090-3fb9ccd67600" class="">Eloquent</h1><ul id="436c1b80-55aa-4d66-b4e5-b41150c43b23" class="toggle"><li><details open=""><summary>click aqui</summary><p id="b2af7aa8-03e4-4692-84bf-d89d5a580a76" class="">eloquent es el ORM de laravel para la manipulación de registros, para la manipulación de datos emplea modelos, para crear estos modelos empleamos:</p><pre id="8ecac774-6089-4613-8756-f035ffdcfd17" class="code"><code>php artisan make:model name</code></pre><p id="cd3980da-604d-49af-8d32-c96feb905049" class=""><mark class="highlight-yellow"><em>Nota: eloquent agrega una </em></mark><mark class="highlight-red"><code><em>s</em></code></mark><mark class="highlight-yellow"><em> al final del nombre, lo que afecta el nombrar los modelos para las tablas. ejemplo:</em></mark></p><p id="8914a378-cd4f-430d-b6df-41f940a93cd9" class=""><mark class="highlight-yellow"><em>Curso → Cursos</em></mark></p><p id="13840d39-5e8e-4a36-993e-f7c8269c79af" class="">para emplear el ORM podemos usar la consola con <code>tinker</code></p><pre id="91a3215b-f27a-44e5-b932-ee99e7da710b" class="code"><code>php artisan tinker</code></pre><p id="1dd6e8a7-4cc4-4cfb-92b4-67adb16a8903" class="">ejemplo:</p><pre id="69f7b395-1133-4dae-8f1f-1eb0b27d9dbb" class="code"><code>PS C:\xampp\htdocs\laravel\blog&gt; php artisan tinker
Psy Shell v0.10.8 (PHP 8.0.1 — cli) by Justin Hileman
&gt;&gt;&gt; use App\Models\Curso;
&gt;&gt;&gt; $curso = new Curso;
=&gt; App\Models\Curso {#3426}
&gt;&gt;&gt; $curso-&gt;name=&#x27;Laravel&#x27;;
=&gt; &quot;Laravel&quot;
&gt;&gt;&gt; $curso-&gt;description=&#x27;El mejor framework de PHP&#x27;;
=&gt; &quot;El mejor framework de PHP&quot;
&gt;&gt;&gt; $curso;
=&gt; App\Models\Curso {#3426
     name: &quot;Laravel&quot;,     
     description: &quot;El mejor framework de PHP&quot;,
   }
&gt;&gt;&gt; $curso-&gt;save();
=&gt; true
&gt;&gt;&gt; $curso-&gt;description=&quot;el mejor framework&quot;;
=&gt; &quot;el mejor framework&quot;
&gt;&gt;&gt; $curso;
=&gt; App\Models\Curso {#3426
     name: &quot;Laravel&quot;,
     description: &quot;el mejor framework&quot;,
     updated_at: &quot;2021-08-08 00:29:15&quot;,
     created_at: &quot;2021-08-08 00:29:15&quot;,
     id: 2,
   }
&gt;&gt;&gt; $curso-&gt;save();
=&gt; true</code></pre><p id="edcf28af-6480-4085-8f5d-94863b2a1178" class="">
</p><p id="ff12fe9f-8733-4a2f-9a20-a89d457c875e" class="">en caso de no querer usar tinker podemos cambiar el nombre de la tabla desde el modelo:</p><pre id="dec28d71-2f04-4993-96e3-eda20989a473" class="code"><code>&lt;?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
}</code></pre><p id="a6933814-cc45-4a43-ab40-ae79543b948b" class="">agregamos <code>protected $table = &quot;users&quot;;</code> donde ahora administrara la tabla <code>users</code></p><pre id="33e69249-db53-41a5-904f-95da5d8cdfac" class="code"><code>&lt;?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = &quot;users&quot;;
}</code></pre><pre id="1855ea6d-44bd-4414-9584-962843413606" class="code"><code>sy Shell v0.10.8 (PHP 8.0.1 — cli) by Justin Hileman
&gt;&gt;&gt; use App\Models\Curso;
&gt;&gt;&gt; $curso = new Curso;
=&gt; App\Models\Curso {#3426}
&gt;&gt;&gt; $curso-&gt;name=&quot;name of test&quot;;
=&gt; &quot;name of test&quot;
&gt;&gt;&gt; $curso-&gt;password=&quot;12345678&quot;;
=&gt; &quot;12345678&quot;
&gt;&gt;&gt; $curso-&gt;email=&quot;leenh@leenhcraft.com&quot;;
=&gt; &quot;leenh@leenhcraft.com&quot;
&gt;&gt;&gt; $curso;
=&gt; App\Models\Curso {#3426
     name: &quot;name of test&quot;,
     password: &quot;12345678&quot;,
     updated_at: &quot;2021-08-08 00:37:59&quot;,
     created_at: &quot;2021-08-08 00:37:59&quot;,
     email: &quot;leenh@leenhcraft.com&quot;,
     id: 1,
   }
&gt;&gt;&gt; $curso-&gt;save();
=&gt; true</code></pre></details></li></ul><h1 id="de0b6568-ef2e-44fb-a12a-f73e73e425c3" class="">Seeder</h1><ul id="ca6020fa-5179-47ea-9515-549c75553f4a" class="toggle"><li><details open=""><summary>click aqui</summary><p id="cfba2b5d-d62f-48fc-81a0-70e0e67fd125" class="">los seeder son la manera de meter datos a tablas, también son usadas para datos de lleno o pruebas</p><p id="2e862638-82fa-4a87-8f43-c9c665f12551" class="">
</p><p id="4ddbbced-3593-4edf-8aa2-8a315d6c6bc4" class="">para crear un archivo usamos el comando:</p><pre id="f55d383a-4d70-4332-860b-24956009d386" class="code"><code>php artisan make:seeder CursoSeeder</code></pre><p id="5d04c1e7-4bac-4151-be57-c900954f48e9" class="">ruta del archivo:</p><p id="ee09b90e-bd55-46fe-b09f-19216acdffac" class=""><code>blog\database\seeders</code></p><p id="c2939f6c-1f6b-4a9b-8d2e-1679b6b049ce" class="">
</p><p id="2b5d32df-688f-4c11-addc-871c7524e1c0" class="">en el archivo <code>DatabaseSeeder.php</code> haremos el llamado de <code>CursoSeeder</code> mediante</p><pre id="7adc3908-88b9-4637-8576-121b4c11d1eb" class="code"><code>$this-&gt;call(CursoSeeder::class);</code></pre><pre id="943104f0-8098-4ebd-abf7-e02cd7ba95d1" class="code"><code>&lt;?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application&#x27;s database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)-&gt;create();

        $this-&gt;call(CursoSeeder::class);

    }
    
}</code></pre><p id="df192f40-6bfb-4392-8d4f-567af4948181" class="">
</p><p id="2856134e-ff7c-42c0-b5dd-68efac7108e9" class="">en <code>CursoSeeder.php</code> escribimos igual que eloquent</p><pre id="131ac2e9-1ed0-4053-be5e-be02c720ed2b" class="code"><code>&lt;?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso =new Curso();

        $curso-&gt;name = &quot;laravel&quot;;
        $curso-&gt;description=&quot;el mejor framework de php&quot;;
        $curso-&gt;save();
    }
}</code></pre><p id="f33bcd91-2b41-4c88-9f5e-0563211f4e02" class="">para migrar esos datos ejecutamos</p><pre id="3d0008bf-e0fe-4e6f-8735-b21308a05421" class="code"><code>php artisan db:seed</code></pre><pre id="a1ed595a-8d4d-4dd1-89f9-6391b305b318" class="code"><code>php artisan migrate --seed</code></pre></details></li></ul><h1 id="9f98988a-8aad-4c02-9659-8eff0d1c7af2" class="">Factory</h1><ul id="13053bb6-e1e8-4979-825d-86e1747166e7" class="toggle"><li><details open=""><summary>click aqui</summary><p id="c389a42a-4879-4a7f-89b0-34a5924643ac" class="">los factory son datos de prueba o ficticios para hacer pruebas</p><p id="76690dc6-e4db-473b-b7c4-3b8dfd13b6f0" class="">
</p><p id="096b4a2f-9fac-45fb-a6b5-bc08f624cd68" class="">para crear un factory ejecutamos</p><pre id="aef631a6-6b4d-4038-bf03-59dcb6bc50cb" class="code"><code>php artisan make:factory CursoFactory</code></pre><p id="64c34eea-055a-49af-b6a9-a6429b0bc19c" class="">ruta del archivo:</p><pre id="256de247-4a89-4fc4-9eef-0ebe2c70cfe0" class="code"><code>blog\database\factories</code></pre><p id="e37baa60-70fc-4ad0-a04c-4c7177ddd2ee" class="">dentro del archivo nos tocara este código:</p><pre id="37af20a4-8ec6-4bcf-86c6-68d8b98f457b" class="code"><code>&lt;?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{
    /**
     * The name of the factory&#x27;s corresponding model.
     *
     * @var string
     */
    protected $model = Curso::class;

    /**
     * Define the model&#x27;s default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        ];
    }
}</code></pre><p id="409cfce8-1179-48f2-bade-eac8d0212f61" class="">
</p><p id="1b800310-c7c7-4933-a3e7-bfb45c344346" class="">dentro de <code>CursoFactory.php</code> en la función <code>definition()</code> definiremos los campos de la tabla en la base de datos y definimos que se genere datos ficticios con:</p><pre id="c86a6d1d-012e-4ca2-b0b7-7a143a645d7d" class="code"><code>$this-&gt;faker-&gt;</code></pre><p id="785080d5-f77d-46b1-963f-82636d0af87f" class="">con sentence, paragraph, ramdomElement y otros más podemos generar datos de diferentes tipos.</p><pre id="1c017fbb-ba3b-4314-a064-9154a2ebabc9" class="code"><code>public function definition()
    {
        return [
            //
            &#x27;name&#x27;=&gt;$this-&gt;faker-&gt;sentence(),
            &#x27;description&#x27;=&gt;$this-&gt;faker-&gt;paragraph(),
            &#x27;categoria&#x27;=&gt;$this-&gt;faker-&gt;randomElement([&#x27;Desarrollo web&#x27;,&#x27;Diseño web&#x27;])
        ];
    }</code></pre><p id="6b38cce2-fedb-4196-8a62-19bbda841449" class="">
</p><p id="fb3f2be8-b20a-4e75-8aef-d42a922c3c17" class="">dentro de los modelos hacemos el llamado del seeder con , con el numero 50 indicamos la cantidad de registros.</p><pre id="d46d13ae-26a7-4238-81ab-8a3c4bfe3b24" class="code"><code>Cuso::factory(50)-&gt;create();</code></pre><p id="c9abcf75-a84e-48e3-929d-565e84a8c409" class="">en la función <code>run()</code></p><pre id="48b518c5-b183-45ee-a62d-bc395924bec9" class="code"><code>&lt;?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cuso::factory(50)-&gt;create();
    }
}</code></pre></details></li></ul><h1 id="cdfc8a51-1cf8-4755-82de-7caece0318d2" class="">Consultas en Eloquent</h1><ul id="6db6173f-8b28-4ee7-b141-09d794b7ea87" class="toggle"><li><details open=""><summary>click aqui</summary><pre id="ad4971ee-b5f9-4c49-b707-328a7abd42a3" class="code"><code>use App\Models\Curso;
$curso = Curso::all();

$curso = Curso::where(&#x27;categoria&#x27;,&#x27;Diseño web&#x27;)-&gt;get();

$curso = Curso::where(&#x27;categoria&#x27;,&#x27;Diseño web&#x27;)-&gt;orderBy(&#x27;id&#x27;,&#x27;desc/asc&#x27;)-&gt;get();

$curso = Curso::where(&#x27;categoria&#x27;,&#x27;Diseño web&#x27;)-&gt;first();

$curso = Curso::select(&#x27;name&#x27;,&#x27;description&#x27;)-&gt;get();

$curso = Curso::select(&#x27;name&#x27;,&#x27;description&#x27;,&#x27;categoria&#x27;)-&gt;orderBy(&#x27;name&#x27;,&#x27;asc&#x27;)-&gt;where(&#x27;categoria&#x27;,&#x27;Diseño web&#x27;)-&gt;get();

$curso = Curso::select(&#x27;name as title&#x27;,&#x27;description&#x27;,&#x27;categoria&#x27;)-&gt;orderBy(&#x27;name&#x27;,&#x27;asc&#x27;)-&gt;where(&#x27;categoria&#x27;,&#x27;Diseño web&#x27;)-&gt;get();

$curso = Curso::select(&#x27;name as title&#x27;,&#x27;description&#x27;,&#x27;categoria&#x27;)-&gt;orderBy(&#x27;name&#x27;,&#x27;asc&#x27;)-&gt;where(&#x27;categoria&#x27;,&#x27;Diseño web&#x27;)-&gt;get()-&gt;take(2);

$curso = Curso::find(5);

$curso-&gt;name;

$curso = Curso::where(&#x27;id&#x27;,&#x27;&gt;&#x27;,47)-&gt;get();

$curso = Curso::where(&#x27;name&#x27;,&#x27;like&#x27;,47)-&gt;get();</code></pre></details></li></ul><h1 id="86fbd147-9163-4e0c-bf2b-568950614814" class="">Listar y leer registros en Laravel</h1><ul id="65f7c710-12a9-4806-9cb9-3ad398145152" class="toggle"><li><details open=""><summary>click aqui</summary><p id="23083022-95ec-4d04-b90e-2e640eb98042" class="">daremos nombre a las rutas con el método <code>name()</code> al final de la ruta, y el nombre esta compuesta por nombre de la ruta y el método que ejecuta por ejemplo <code>cursos.index</code></p><pre id="9a172c01-cdc9-4b52-a57e-eb3874eef523" class="code"><code>Route::get(&#x27;cursos&#x27;, [CursoController::class, &#x27;index&#x27;])-&gt;name(&#x27;cursos.index&#x27;);</code></pre><p id="62d81ff4-f928-4494-94dd-7a4ce4af962b" class="">paginamos los registros que extraemos y los enviamos</p><pre id="40aaabdd-5ba9-45ac-910a-001ab40221b5" class="code"><code>//paginacion de los registros
$cursos = Curso::paginate();

//enviamos los datos con compact
return view(&#x27;cursos.index&#x27;, compact(&#x27;cursos&#x27;));</code></pre><p id="08b0ab44-4375-47e8-bf91-05920584c097" class="">mostramos los registros con un forech</p><pre id="982698b6-3503-4578-a241-94c1c1c25b47" class="code"><code>//mostrando datos
&lt;ul&gt;
	@foreach ($cursos as $curso)
			&lt;li&gt;{{$curso-&gt;name}}&lt;/li&gt;
  @endforeach
 &lt;/ul&gt;

//mostrando los controles de paginacion
{{$cursos-&gt;links()}}</code></pre><p id="64d3e679-392c-4cd6-be81-2115ee717bbb" class="">
</p><p id="a569d5a7-13ee-4810-a847-e648f243d0c1" class="">haciendo referencia a una ruta por su nombre <code>cursos.create</code></p><pre id="6cd0e4c0-32e6-4e44-8cf0-960845f9e3c9" class="code"><code>//la ruta es cursos/create
&lt;a href=&quot;{{route(&#x27;cursos.create&#x27;)}}&quot;&gt;Crear curso&lt;/a&gt;</code></pre><p id="057e6385-3e2a-4e8f-ba65-46da094a9374" class="">pasando parámetros por <code>route()</code></p><pre id="a0c85cae-7664-48dd-ad18-993e8bac1a30" class="code"><code>route(&#x27;cursos.show&#x27;,&#x27;aqui tus parametros&#x27;)

//ejemplo, como parametro el id
route(&#x27;cursos.show&#x27;,$curso-&gt;id)
&lt;a href=&quot;{{ route(&#x27;cursos.show&#x27;,$curso-&gt;id)}}&quot;&gt;{{$curso-&gt;name}}&lt;/a&gt;</code></pre><p id="6516521e-fe67-494e-9430-a76064e65e6d" class="">
</p></details></li></ul><h1 id="513e24df-26d1-4d28-a16b-e744fadc4bca" class="">Validar form</h1><ul id="a59757f6-2012-47a4-9e5d-7f9e8c58709f" class="toggle"><li><details open=""><summary>click aqui</summary><p id="a1ce4276-a046-4cf8-81df-617286ab7e3f" class="">para traducir alertas en español modificamos en nuestro proyecto </p><pre id="7e8e8e3d-2269-488f-9f61-4f2bc8e1a544" class="code"><code>blog\resources\lang</code></pre><p id="d6a2aba2-6c47-43f5-8476-54ab9959d72c" class="">dentro de <code>lang</code> creamos la carpeta es y agregamos los archivos traducidos, podemos descargar los archivos de github <code><a href="https://github.com/Laraveles/spanish">https://github.com/Laraveles/spanish</a></code> </p><p id="7eb07198-fef9-4cc0-8a12-58760383b295" class="">ahora en config/app.php modificamos el atributo <code>&#x27;locale&#x27;⇒&#x27;en&#x27;</code> por <code>&#x27;locale&#x27;⇒&#x27;es&#x27;</code></p><pre id="1f63b335-8e17-463e-b67a-69d913bd94a1" class="code"><code>&#x27;locale&#x27; =&gt; &#x27;es &#x27;,</code></pre><p id="c90a7a43-f85a-4bba-8483-7175faf5647d" class="">para personalizar un mensaje podemos modificarlo en <code>resources/lag/es/validation.php</code> en attributes:</p><pre id="f378a2a2-4471-4f64-a5bd-674f7993a207" class="code"><code>&#x27;attributes&#x27; =&gt; [
		 &#x27;name&#x27;=&gt;&#x27;nombre&#x27;
 ],
/* en este caso el campo name lo presonalizamos
para que diga nombre
*/

*El campo nombre es obligatorio.</code></pre><p id="59b7c7d3-2697-422a-a9df-ae8570966baf" class="">
</p><p id="e759498d-c6f7-44b2-a33e-84041a13f35a" class="">el método old() evita perder datos ingresado a un input si se falla la validación</p><pre id="3fa03ff6-198b-4911-881f-d79e3700f872" class="code"><code>&lt;input type=&quot;text&quot; name=&quot;name&quot; value=&quot;{{old(&#x27;name&#x27;)}}&quot;&gt;</code></pre><ul id="92eccb09-a022-4fd7-a1aa-3040ba7e2a4b" class="toggle"><li><details open=""><summary>imagen de ejemplo</summary><figure id="7eb0a073-babe-49a1-9508-1d3e9440232a" class="image"><a href="Laravel%203dfcd353da1348f4aa74b4227ce493e4/Untitled%2014.png"><img style="width:308px" src="Laravel%203dfcd353da1348f4aa74b4227ce493e4/Untitled%2014.png"/></a></figure></details></li></ul><hr id="71619fd4-6e08-4c9f-bf59-156ff439068f"/><p id="80538089-cbb4-40bc-a8c6-386c63bb9fd5" class="">para validar en los métodos de <code>CursoController</code> agregamos</p><pre id="1e9f655c-3b85-4045-92f6-9e9d88802c54" class="code"><code>//validación
        $request-&gt;validate(
            [
                &#x27;name&#x27; =&gt; &#x27;required|max:10&#x27;,
                &#x27;descripcion&#x27; =&gt; &#x27;required|min:5&#x27;,
                &#x27;categoria&#x27; =&gt; &#x27;required&#x27;
            ]
        );</code></pre><p id="e7175842-2151-4c9f-890a-650e3f653e87" class="">
</p></details></li></ul><h1 id="80329b5a-a1da-44f7-a9ab-be10d6c96122" class="">Form Request</h1><ul id="82f2c0ed-ba8b-4e83-be01-b2090319824b" class="toggle"><li><details open=""><summary>click aqui</summary><p id="9c3adc93-ddce-433b-9e38-59d6481a9479" class="">es un formulario de validación avanzado, para crearlo ejecutamos: </p><pre id="e96a6aaa-797b-4fea-8ede-a9f5573cc9f8" class="code"><code>php artisan make:request StoreCurso</code></pre><p id="66ffefe2-7c9f-4b67-969b-071a81aa0d91" class="">ruta del form</p><pre id="18d018fc-692e-4ebc-a3a9-af0fabe81f93" class="code"><code>blog\app\Http\Requests</code></pre><p id="b30bff7a-ba75-4704-abf2-fb05493397b0" class="">en el metodo authorize retornamos true</p><pre id="3c465d9d-2601-43c8-9d3e-3326fbe8a2e6" class="code"><code>public function authorize()
    {
        return true;
    }</code></pre><p id="5e37b8ea-b90a-4fe2-bc88-62f9a7a92eee" class="">y en rules escribimos las diferentes reglas de validadción</p><pre id="c14dd78d-e492-4e1c-8f50-ede83aa85e5f" class="code"><code>public function rules()
    {
        return [
            &#x27;name&#x27; =&gt; &#x27;required&#x27;,
            &#x27;descripcion&#x27; =&gt; &#x27;required&#x27;,
            &#x27;categoria&#x27; =&gt; &#x27;required&#x27;
        ];
    }</code></pre><p id="8d0f9d7a-7bde-4c95-88bf-8cc56ae2de08" class="">en el controlador CursoController en el metodo store hacemos el llamado de StoreCurso, en lugar de Request escribimos StoreCurso</p><pre id="c5426f2b-6bf2-46a1-9884-da46d53509d7" class="code"><code>public function store(StoreCurso $request)</code></pre><p id="ecb4dd4c-c565-4290-b266-3c4f9a9d6fa2" class="">ahora para personalizar las advertencias creamos otro método en StoreCurso llamado attributes o el método messages</p><pre id="3476b05a-c046-4b7f-8849-2c5cb7d48197" class="code"><code>public function attributes()
    {
        return [
            &#x27;name&#x27; =&gt; &#x27;nombre del curso&#x27;,
        ];
    }
public function messages()
    {
        return [
            &#x27;descripcion.required&#x27; =&gt; &#x27;Debe ingresar una descripcion del curso&#x27;,
        ];
    }</code></pre></details></li></ul><h1 id="95348651-f1c7-472c-8856-1ef8905723a0" class="">Asignación Masiva</h1><ul id="588a6482-521a-4fd1-834b-2aaf56250228" class="toggle"><li><details open=""><summary>click aqui</summary><p id="e2bcfde4-e2fe-4677-bdb5-a9985d64d6b0" class="">primera forma, en el método store en CursoController:</p><pre id="bbe22b37-311a-43f7-99b7-bcbccb988561" class="code"><code>$curso = Curso::create([
            &#x27;name&#x27; =&gt; $request-&gt;name,
            &#x27;description&#x27; =&gt; $request-&gt;descripcion,
            &#x27;categoria&#x27; =&gt; $request-&gt;categoria
        ]);</code></pre><p id="42a4d560-91bc-451f-b433-3feb4a75ab8d" class="">segunda forma</p><pre id="c66af289-6651-4e16-ac7e-8c9e21b85b3c" class="code"><code>$curso = Curso::create($request-&gt;all());
/*Esta forma generará un error de seguridad
que es porque debe ser validado por un administrador*/</code></pre><p id="9c377efc-a70e-4096-a116-88e8a9e41eb8" class="">para evitar el error en el modelo de Curso agregamos los campos que solo queremos guardar</p><pre id="b8db4c9d-fde9-49bc-8d73-65f53f3f35a7" class="code"><code>protected $fillable = [&#x27;name&#x27;, &#x27;description&#x27;, &#x27;categoria&#x27;];
/*Esta linea en caso de querer guardar datos de manera maliciiosa
lo que hara esque solo guardará lo que esté definido en este array
haciendo más dificil el agregar contenido malicioso*/</code></pre><p id="afa1483c-e675-410c-9106-d70300ed4aab" class="">una segunda forma de declarar en el modelo es con la variable guarded, la diferencia es que dentro del array de guarded definimos los campos que no queremos que se guarden:</p><pre id="03c4d0c9-1001-4f73-9e4f-4c7301d720c5" class="code"><code>protected $guarded = [&#x27;status&#x27;];
//en nuestro caso irá vacio</code></pre><p id="48a5a61f-883e-4fb6-b966-ee28b986497a" class="">en el metodo update en curso controller modificamos la forma de actualiza de la siguiente forma: </p><pre id="0163941f-c9ec-4034-b256-ede6a5efc5b5" class="code"><code>$curso-&gt;update($request-&gt;all());
//en lugar de 

$curso-&gt;name = $request-&gt;name;
$curso-&gt;description = $request-&gt;description;
$curso-&gt;categoria = $request-&gt;categoria;
$curso-&gt;save();</code></pre></details></li></ul><h1 id="4561e628-7cfe-4566-b2f2-5e86ce7952e2" class="">Eliminar un registro</h1><ul id="61365609-2438-4039-bfb8-d4017d7e24ad" class="toggle"><li><details open=""><summary>click aqui</summary><p id="8506d366-058d-4ad4-8382-c8562be8596d" class="">creamos la ruta de tipo delete y como nombre le damos destroy</p><pre id="2ebe93c5-ebec-4ec7-8469-9b5340abb0f3" class="code"><code>Route::delete(&#x27;cursos/{curso}&#x27;, [CursoController::class, &#x27;destroy&#x27;])-&gt;name(&#x27;cursos.destroy&#x27;);</code></pre></details></li></ul><p id="48dc3454-f995-4a32-8aa4-2a225cb2f822" class="">en el controlador de curso creamos el método destroy y redireccionamos al index después de eliminada el registro</p><pre id="30f0cc83-4a23-49e2-bd20-0fa9e48a9d8e" class="code"><code>public function destroy(Curso $curso)
    {
        $curso-&gt;delete();
        return redirect()-&gt;route(&#x27;cursos.index&#x27;);
    }</code></pre><p id="636b3dc4-7f8d-4f28-971d-f5bd7170fcb1" class="">en nuestro archivo html agregamos un form con un boton, el motivo es que el metodo delete en html no es reconocida pero si usamos la directiva de blade de @method si podremos llamarla, ademas debemos de pasar el token con @csrf</p><pre id="2c39b85e-129c-45e5-9970-ae19593747ab" class="code"><code>&lt;form action=&quot;{{ route(&#x27;cursos.destroy&#x27;,$curso) }}&quot; method=&quot;POST&quot;&gt;

    @csrf//token
    
    @method(&#x27;delete&#x27;)

    &lt;button type=&quot;submit&quot;&gt;Eliminar&lt;/button&gt;
&lt;/form&gt;</code></pre></div></article></body></html>