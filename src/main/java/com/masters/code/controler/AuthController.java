package com.masters.code.controler;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
@RequestMapping(path = "/auth")
public class AuthController {

    @GetMapping(path = "/login")
    public String login(Model model) {
        model.addAttribute("msg", "Credenciais inválidas");
        return "login";
    }

    @GetMapping(path = "/register")
    public String register() {
        return "register";
    }
}
