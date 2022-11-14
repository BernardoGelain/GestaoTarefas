@component('mail::message')
# {{$tarefa}}

Data Limite de conclusão: {{$data_limite_conclusao}}

@component('mail::button', ['url' => $url])
Clique para ver a Tarefa
@endcomponent

Saudações,<br>
{{ config('app.name') }}
@endcomponent
