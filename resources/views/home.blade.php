@extends('layouts.app')
@section('header_content')
<div class="row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <h3 class="content-header-title white">Horizontal Forms</h3>
        <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Form Layouts</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="#">Horizontal Forms</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="content-header-right col-md-3 col-12">
        <div aria-label="Button group with nested dropdown" class="btn-group float-md-right" role="group">
        </div>
    </div>
</div>




@endsection
@section('content')
<!-- Description -->
<section class="card" id="description">
    <div class="card-header">
        <h4 class="card-title">
            Description
        </h4>
    </div>
    <div class="card-content">
        <div class="card-body">
            <div class="card-text">
                <p>
                    For dark footer, Modern Admin provides dark color footer options, you can check dark color footer on
                                    bottom of this page.
                </p>
            </div>
            <div class="alert bg-success alert-icon-left mb-2" role="alert">
                <span class="alert-icon">
                    <i class="la la-pencil-square">
                    </i>
                </span>
                <strong>
                    Experience it!
                </strong>
                <p>
                    This page contain footer dark color options example, check on the bottom of the page.
                </p>
            </div>
        </div>
    </div>
</section>
<!--/ Description -->
<!-- CSS Classes -->
<section class="card" id="css-classes">
    <div class="card-header">
        <h4 class="card-title">
            CSS Classes
        </h4>
    </div>
    <div class="card-content">
        <div class="card-body">
            <div class="card-text">
                <p>
                    This table contains all classes which can be used in dark footer. You can combine them as per footer
                                    dark template requirements.
                </p>
                <p>
                    All these options can be set via following classes:
                </p>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>
                                    Classes
                                </th>
                                <th>
                                    Description
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <code>
                                        .footer-dark
                                    </code>
                                </th>
                                <td>
                                    To set footer dark color you need to add
                                    <code>
                                        .footer-dark
                                    </code>
                                    class in footer
                                    <code>
                                        <footer>
                                    </code>
                                    tag. Refer HTML markup line no 37.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ CSS Classes -->
<!-- HTML Markup -->
<section class="card" id="html-markup">
    <div class="card-header">
        <h4 class="card-title">
            HTML Markup
        </h4>
        <a class="heading-elements-toggle">
            <i class="la la-ellipsis-v font-medium-3">
            </i>
        </a>
        <div class="heading-elements">
            <ul class="list-inline mb-0">
                <li>
                    <a data-action="collapse">
                        <i class="ft-minus">
                        </i>
                    </a>
                </li>
                <li>
                    <a data-action="reload">
                        <i class="ft-rotate-cw">
                        </i>
                    </a>
                </li>
                <li>
                    <a data-action="close">
                        <i class="ft-x">
                        </i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="card-content collapse show">
        <div class="card-body">
            <div class="card-text">
                <p>
                    This section contains HTML Markup to create dark footer. This markup define where to add css classes
                                    to make footer dark.
                </p>
                <ul>
                    <li>
                        <span class="text-bold-600">
                            Line no 37:
                        </span>
                        Contain the
                        <code>
                            .footer-dark
                        </code>
                        class for
                                        adjusting footer color dark.
                    </li>
                </ul>
                <pre class="language-markup" data-line="37">
                                </pre>
            </div>
        </div>
    </div>
    <button class="btn btn-primary" id="eliminar">
        eliminar
    </button>

    <button class="btn btn-primary" id="mostrar">
        Mostrar
    </button>

    <button class="btn btn-primary" id="editar">
        Editar
    </button>
</section>
<!--/ HTML Markup -->
@endsection
