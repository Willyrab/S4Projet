<div class="col-xl-6 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Ajout de Code</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="codeRechargeController/ajouter" method="post">
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Code</label>
                            <input type="text" class="form-control" value="" id="code" name="code">
                            <button id="generateButton" class="btn btn-primary mt-1">Generer</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Valeur</label>
                            <input type="number" class="form-control" name="valeur">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-5">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function generateRandomString() {
        const characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        let string = '';
        for (let index = 0; index < 16; index++) {
            const randomIndex = Math.floor(Math.random() * characters.length);
            string += characters.charAt(randomIndex);
        }
        return string;
    }

    function checkIfExists(string) {
        var xhr;
        try {
            xhr = new ActiveXObject('Msxml2.XMLHTTP');
        } catch (e) {
            try {
                xhr = new ActiveXObject('Microsoft.XMLHTTP');
            } catch (e2) {
                try {
                    xhr = new XMLHttpRequest();
                } catch (e3) {
                    xhr = false;
                }
            }
        }
        xhr.addEventListener("load", function(event) {
            $msg = (event.target.responseText != "") ? event.target.responseText : "OK";
            //alert($msg);
            document.getElementById("code").value = string;
        });

        xhr.addEventListener("error", function(event) {
            alert('Oups! Quelque chose s\'est mal passé.');
        });
        var data = new FormData();
        console.log(string);
        data.append('string', string);
        xhr.open("POST", "codeRechargeController/checkIfExists");
        xhr.send(data);
    }

    async function generateUniqueString() {
        let randomString = generateRandomString();
        while (await checkIfExists(randomString)) {
            randomString = generateRandomString();
        }
        return randomString;
    }

    var generateButton = document.getElementById('generateButton');
    generateButton.addEventListener('click', (event) => {
        event.preventDefault();
        generateUniqueString();
    });
</script>