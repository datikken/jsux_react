import React from 'react';
import ReactHtmlParser from 'react-html-parser';
import {gql, useQuery} from "@apollo/client";
import Spinner from "./Spinner";

export function Article({ id }) {
    const GEAT_ARTICLE = gql`
        query GetArticles {
            article(id: ${id}) {
                id,
                title,
                content,
                author {
                    name
                }
            }
        }
    `;

    const {loading, error, data} = useQuery(GEAT_ARTICLE);

    if (loading) return <Spinner/>;
    if (error) return `Error! ${error.message}`;

    return (
        <>
            { ReactHtmlParser (data.article.content) }
        </>
    );
}
