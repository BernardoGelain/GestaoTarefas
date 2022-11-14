<tr>
<td class="header">
<a href="https://drive.google.com/file/d/1Mjs-r1rzYYQYBv9Q2tgQc4wF-lMFa4wv/view?usp=sharing" style="display: inline-block;">
@if (trim($slot) === 'Pringles')
<img src="public/imagens/pringles.svg" class="logo" alt="Logo"></img>
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
