import React from 'react';
import {Link} from 'react-router-dom';

import Container from 'react-bootstrap/Container';
import { Button } from 'react-bootstrap';


const Header=()=>{
    return(
        <div>
            <Container>
            <Link to="/home"><Button variant="warning">Home</Button></Link> &nbsp;
            <Link to="/doctors"><Button>Doctor List</Button></Link> &nbsp;
            </Container>
        </div>
        
    )
}

export default Header;