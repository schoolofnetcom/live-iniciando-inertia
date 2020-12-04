import React from 'react';

const List = ({users}) => {
    return (
        <div>
            <h1>Listagem de Usuários</h1>
            <ul>
            {
                users.map((user) => (
                    <li key={user.id} style={{marginBottom: "20px"}}>
                        {user.name}
                    </li>
                ))
            }
            </ul>
        </div>
    );
}

export default List;
