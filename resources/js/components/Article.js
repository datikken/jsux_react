import React from 'react';
import ReactHtmlParser from 'react-html-parser';
import {gql, useQuery} from "@apollo/client";
import Spinner from "./Spinner";
import Typography from '@material-ui/core/Typography';
import {makeStyles} from "@material-ui/core/styles";

const useStyles = makeStyles((theme) => ({
    root: {
        display: 'flex',
        flexDirection: 'column'
    },
}));

export function Article({id}) {
    const classes = useStyles();

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
        <div className={classes.root}>
            {ReactHtmlParser(data.article.content)}
        </div>
    );
}
