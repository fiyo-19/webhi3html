            const select = document.querySelector('select');
            const articles = document.querySelector('.articles');

            select.addEventListener('change', (event) => {
                const selected = event.target.value;

                for(let i = 0; i < articles.children.length; i++) {
                    const article = articles.children[i];

                    if (selected === 'none') {
                        article.style.display = 'block';
                    } else {
                        if (article.id !== selected) {
                            article.style.display = 'none';
                        } else {
                            article.style.display = 'block';
                        }
                    }
                }
            });
