<script>

const profileButton = document.getElementById('profile-menu-button');
const profileMenu = document.getElementById('profile-menu');

profileButton.addEventListener('click', () => {
    profileMenu.classList.toggle('hidden');
});

document.addEventListener('click', (event) => {
    if (!profileButton.contains(event.target) && !profileMenu.contains(event.target)) {
        profileMenu.classList.add('hidden');
    }
});



ClassicEditor
        .create(document.querySelector('#content'), {
            toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote'],
            heading: {
                options: [
                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                    { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' }
                ]
            }
        })
        .catch(error => {
            console.error(error);
        });


        function previewProfileImage(event) {
        const reader = new FileReader();
        reader.onload = function () {
            const preview = document.getElementById('profile-image-preview');
            preview.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

</body>

</html>