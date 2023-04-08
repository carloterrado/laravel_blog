<div class="max-w-sm border p-4">
    <p id="text" active=true onclick="openText()">{{ $excerpt($text) }}</p>
</div>

<script>
    function openText(){
       
       
        var text = document.getElementById('text');
        var status = text.getAttribute('active');
      
        if(status === "true")
        {
            text.setAttribute('active', 'false');
            text.textContent = "{{ $excerpt($text) }}";
            return;
        }
        text.setAttribute('active', 'true');
        text.textContent = "{{ $text }}";
    }
</script>