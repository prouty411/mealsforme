import React, { Component } from 'react';
import '../assets/css/favorites.css';
import {Link} from "react-router-dom";

class InvidualFavorite extends Component{
    constructor(props){
        super(props);
    }


    render(){
        const { user_id, recipe_id, Image, Name } = this.props.item;
        return (
            <div className='center-block card-panel individualPanel'>
                <Link to={`/recipe/${recipe_id}`}>
                    <div className="favListItemName">
                        <h5>{Name}</h5>
                    </div>
                    <div className='dishContainer'>
                        <img src={Image} />
                    </div>
                </Link>
                <div className="favTrash">
                    <i className="medium material-icons red-text" onClick={()=>this.props.delete(user_id, recipe_id)}>delete</i>
                </div>
            </div>
            

        );
    }
}

export default InvidualFavorite;