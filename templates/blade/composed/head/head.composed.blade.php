{{--
  This file is auto-generated.

  Head - Composed Example
  The head element contains meta-information about the HTML document, including its title and links to its scripts and stylesheets.

  CONTENT MODEL:
  - Can be a child of: HTML
  - Can contain: Base, Link, Meta, NoScript, Script, Style, Title
  - UNIQUE: Only one allowed per document
  - UNIQUE PER PARENT: Only one allowed per parent element

  @author vardumper <info@erikpoehler.com>
  @package vardumper/extended-htmldocument
  @see src/TemplateGenerator/BladeGenerator.php
--}}
@section('head_composed')
<head class="example">
@include('blade.void.base.base', ['href' => '/'])
@include('blade.void.link.link', ['rel' => 'stylesheet', 'href' => '/styles.css'])
@include('blade.void.link.link', ['rel' => 'stylesheet', 'href' => '/styles.css'])
@include('blade.void.meta.meta', ['name' => 'description', 'content' => 'Example'])
@include('blade.void.meta.meta', ['name' => 'description', 'content' => 'Example'])
@include('blade.void.script.script', ['content' => 'Example content'])
@endsection
</head>
