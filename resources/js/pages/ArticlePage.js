import React from "react";
import {
    useParams
} from "react-router-dom";
import {gql, useQuery} from '@apollo/client';
import Spinner from '../components/Spinner';
import Drawer from '../components/Drawer';
import {Article} from '../components/Article';

export function ArticlePage() {
    let { id } = useParams();

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
        <Drawer>
            <Article article={data.article} />
        </Drawer>
    );
}
