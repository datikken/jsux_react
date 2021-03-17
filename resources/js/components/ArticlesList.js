import React from "react";
import Card from '../components/Card';
import {gql, useQuery} from '@apollo/client';
import Spinner from '../components/Spinner';

const GEAT_ARTICLES = gql`
    query GetArticles {
        articles {
            id,
            title,
            author {
                name
            }
        }
    }
`;

export function ArticlesList() {
    const {loading, error, data} = useQuery(GEAT_ARTICLES);
    if (loading) return <Spinner/>;
    if (error) return `Error! ${error.message}`;

    return (
        <>
            {data.articles.map(article => (
                <Card article={article} key={article.id}/>
            ))}
        </>
    );
}
