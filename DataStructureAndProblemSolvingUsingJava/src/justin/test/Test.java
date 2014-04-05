/**
 * 
 */
package justin.test;

import java.util.ArrayList;
import java.util.ListIterator;

import justin.util.Collection;
import justin.util.Collections;
import justin.util.Iterator;
import justin.util.Set;

/**
 * @author Justin Wu
 * 
 */
public class Test {

    /**
     * @param args
     */
    public static void main(String[] args) {
        testArrayList();
    }

    public static <T> void printCollection(Collection<T> c) {
        Iterator<T> itr = c.iterator();
        while (itr.hasNext()) {
            T t = (T) itr.next();
            System.out.print(t + " ");
        }
        System.out.println();
    }

    public static <T> void printCollection2(Collection<T> c) {
        for (T t : c) {
            System.out.print(t + " ");
        }
        System.out.println();
    }

    public static void testArrayList() {
        ArrayList<Integer> lst = new ArrayList<Integer>();
        lst.add(2);
        lst.add(4);
        ListIterator<Integer> itr1 = lst.listIterator(0);
        ListIterator<Integer> itr2 = lst.listIterator(lst.size());

        while (itr1.hasNext()) {
            System.out.print(itr1.next() + " ");
        }
        System.out.println();

        while (itr1.hasPrevious()) {
            System.out.print(itr1.previous() + " ");
        }
        System.out.println();

        while (itr2.hasPrevious()) {
            System.out.print(itr2.previous() + " ");
        }
        System.out.println();

        for (Integer x : lst) {
            System.out.print(x + " ");
        }
        System.out.println();
    }

    public static void testTreeSet() {
        Set<String> s = new TreeSet<String>(Collections.reverseOrder());
        s.add("Joe");
        s.add("Bob");
        s.add("hal");
        printCollection(s);
    }

}
