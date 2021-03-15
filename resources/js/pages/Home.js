import React from "react";
import Drawer from '../components/Drawer';
import {TodoListView} from '../components/TodoListView';
import TodoList from '../stores/TodoList'
import Todo from '../stores/Todo';

const store = new TodoList([new Todo("Get Coffee"), new Todo("Write simpler code")])

export function Home()
{
    return (
        <>
            <Drawer>
                <h1>Motherfuck</h1>
                <TodoListView todoList={store} />
            </Drawer>
        </>
    );
}
