<h3>Fornecedor</h3>

@php
    /*if() {

    } elseif() {

    } else {

    }*/
@endphp

@if(count($fornecedores) > 0 && count($fornecedores) <10)
    <h3>Existem Alguns Fornecedores Cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem Vários Fornecedores Cadastrados</h3>
@else
    <h3>Ainda Não Existem Fornecedores Cadastrados</h3>
@endif

