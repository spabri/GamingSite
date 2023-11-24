<x-layout>
    <x-navbar></x-navbar>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <form method="POST" action="{{route("contattaci.submit")}}">
                    @csrf
                    <div class="mb-3">
                      <label for="floatingTextArea" class="form-label">Inviaci un'e-mail:</label>
                      <textarea type="text" name= "body" class="form-control rounded-0" placeholder="Scrivi qui il tuo testo:"id="floatingTextArea" aria-describedby="textarea" style="height:200px"></textarea>
                      
                    </div>
                    <button type="submit" class="btn btn-custom rounded-0">Invia</button>
                  </form>
            </div>
        </div>
    </div>
    
    <x-footer></x-footer>
</x-layout>