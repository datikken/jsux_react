import React from "react";
import Drawer from '../components/Drawer';
import Card from '../components/Card';
import { gql, useQuery } from '@apollo/client';
import { useRouteMatch } from "react-router-dom";

// const GEAT_ARTICLES = gql`
//     query GetArticles {
//         article(id) {
//             id,
//             title,
//             author {
//                 name
//             }
//         }
//     }
// `;

export function Article()
{
    const { loading, error, data } = useQuery(GEAT_ARTICLES);

    return (
        <>
            <h1>article</h1>
        </>
    );
}
