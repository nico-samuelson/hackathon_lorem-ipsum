import React from 'react'
import { useState, createContext, useContext } from 'react';

const MobileContext = createContext();

export function useMobileContext() {
    return useContext(MobileContext)
}

export default function MobileContextProvider({children}) {
    const [isMobile, setIsMobile] = useState(window.innerWidth < 768)

    window.onresize = () => {
        setIsMobile(window.innerWidth < 768)
    }

    return (
        <MobileContext.Provider value={{ isMobile }}>
            {children}
        </MobileContext.Provider>
    )
}
