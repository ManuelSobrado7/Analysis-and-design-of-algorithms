public static void main(String[] args) {
        List<String> camino = new ArrayList<>();
        Scanner lector = new Scanner(System.in);
        String a;
        boolean bandera = true;
        do {
            a = lector.next();
            if (a.contains("(") || a.contains(")")) {
                if (!camino.isEmpty()) {
                    for (int i = 0; i < camino.size(); i++) {
                        if (a.equals(camino.get(i))) {
                            bandera = true;
                            break;
                        }
                    }
                } else {
                    camino.add(a);
                }
                if (!bandera) {
                    camino.add(a);
                }
            } else {
                break;
            }
            bandera = false;
        } while (!a.contains("(") || !a.contains(")"));
        System.out.println(camino.size());
    }
}
