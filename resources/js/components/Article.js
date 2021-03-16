import React from 'react';

export function Article({ article }) {
    console.log(article, 'mfka')

    return (
        <>
            <h1>{article.content}</h1>
        </>
    );
}
