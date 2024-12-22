package com.masters.code.controler;

import com.masters.code.domain.customer.Customer;
import org.springframework.security.authentication.UsernamePasswordAuthenticationToken;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

import java.security.Principal;

@Controller
public class PublicController {
    private static void setPrincipal(Principal principal, Model model) {
        if (principal != null) {
            Customer customer = ((Customer) ((UsernamePasswordAuthenticationToken) principal).getPrincipal());
            model.addAttribute("pr", customer);
        }
    }

    @GetMapping
    public String home(Principal principal, Model model) {
        setPrincipal(principal, model);
        return "index";
    }

    @GetMapping(path = "/nosso-metodo")
    public String method(Principal principal, Model model) {
        setPrincipal(principal, model);
        return "metodo";
    }
}
