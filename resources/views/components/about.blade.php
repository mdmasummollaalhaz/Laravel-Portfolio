<!-- About Section-->
<section class="bg-light py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
                <div class="text-center my-5">
                    <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me.</span></h2>
                    <p class="lead fw-light mb-4" id="about-title"></p>
                    <p class="text-muted" id="about-des"> </p>
                    <div class="d-flex justify-content-center fs-2 gap-4">
                        <a target="_blank" id="twitter" class="text-gradient" href=""><i class="bi bi-twitter"></i></a>
                        <a target="_blank" id="linkedin" class="text-gradient" href=""><i class="bi bi-linkedin"></i></a>
                        <a target="_blank" id="github" class="text-gradient" href=""><i class="bi bi-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    getAboutDetail();
    async function getAboutDetail(){
        try{
            let URL="/aboutData";
            let response = await axios.get(URL);
            document.getElementById('about-title').innerHTML=response.data.title;
            document.getElementById('about-des').innerHTML=response.data.details;
        }
        catch(error){
            alert(error);
        }

    }

    getSocialLink()
    async function getSocialLink() {
        try {
            let URL="/socialData";
            let response=await axios.get(URL);

            // debugger;
            document.getElementById('loading-div').classList.add('d-none');
            document.getElementById('content-div').classList.remove('d-none');

            document.getElementById('twitter').href=response.data['twitterLink'];
            document.getElementById('linkedin').href=response.data['linkedinLink'];
            document.getElementById('github').href=response.data['githubLink'];
        }
        catch (error) {
            alert(error)
        }
    }

</script>
