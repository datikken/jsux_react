import Drawer from '../components/Drawer';
import {ArticlesList} from '../components/ArticlesList';
import Helmet from "react-helmet"

export function HomePage()
{
    return (
        <>
            <Helmet
                htmlAttributes={{"lang": "en", "amp": undefined}}
                title="Algorithms explained simple"
                titleTemplate="JSUX.fun - %s"
                defaultTitle="Algorithms explained simple"
                meta={[
                    {"name": "description", "content": "Helmet application"},
                    {"property": "og:type", "content": "article"}
                ]}
                />
            <Drawer>
                <ArticlesList />
            </Drawer>
        </>
    );
}
