import React from "react";
import Drawer from '../components/Drawer';
import Card from '../components/Card';
import { gql, useQuery } from '@apollo/client';

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
export function Home()
{
    const { loading, error, data } = useQuery(GEAT_ARTICLES);
    if (loading) return 'Loading...';
    if (error) return `Error! ${error.message}`;

    return (
        <>
            <Drawer>
                {data.articles.map(article => (
                    <Card article={article} key={article.id} />
                ))}
            </Drawer>
        </>
    );
}
